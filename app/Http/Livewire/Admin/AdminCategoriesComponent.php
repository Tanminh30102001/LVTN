<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoriesComponent extends Component
{
    public $category_id;
    public $subcategory_id;
    use WithPagination;
    public function deleteCategory(){
       
        $category=Category::find($this->category_id);
        // unlink('asset/imgs/category/'.$category->image);
        $category->delete();
        session()->flash('message','Deleted');
    }
    public function deleteSubCategory(){
       
        $scategory=Subcategory::find($this->subcategory_id);
        // unlink('asset/imgs/category/'.$category->image);
        $scategory->delete();
        session()->flash('message','Deleted');
    }

    public function render()
    {
        $categories=Category::orderBy('name','ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component',['categories'=>$categories]);
    }
}
