<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminEditCategoriesComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $is_popular;
    public $newimage;
    public $scategory_id;
    public function mount($category_id,$scategory_id=null){
        if($scategory_id){
            $this->scategory_id=$scategory_id;
            $scategory=Subcategory::find($scategory_id);
            $this->scategory_id=$scategory->id;
            $this->category_id=$scategory->category_id;
            $this->name=$scategory->name;
            $this->slug=$scategory->slug;

        }else
        {
            $category = Category::find($category_id);
            $this->category_id=$category->id;
            $this->name=$category->name;
            $this->slug=$category->slug;
            $this->image=$category->image;
            $this->is_popular=$category->is_popular;
        }
       
    }
    public function generateSlug() {
        $this->slug=Str::slug($this->name);
    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name'=>'required',
            'slug'=>'required'
        ]);
    }
    public function updateCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
        //dd('ok');
        if($this->scategory_id){
            $scategory=Subcategory::find($this->scategory_id);
            $this->scategory_id=$scategory->id;
            $this->category_id=$scategory->category_id;
            $this->name=$scategory->name;
            $this->slug=$scategory->slug;
            $scategory->save();
        }else{
            $category=Category::find($this->category_id);
            $category->name=$this->name;
            $category->slug=$this->slug;
            if($this->newimage){
                // unlink('assets/imgs/category/'.$category->newimage);
                $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
                $this->newimage->storeAs('category',$imageName);
                $category->image=$imageName;
            }
            $category->is_popular=$this->is_popular;
            $category->save();
        }
        
        session()->flash("message","Category Updated Successfully");
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-edit-categories-component',['categories'=>$categories]);
    }
}
