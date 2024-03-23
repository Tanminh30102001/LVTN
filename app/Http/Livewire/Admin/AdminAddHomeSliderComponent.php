<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $status;
    public $link;
    public $image;
    public function addSlider(){
        $this->validate([
            'top_title'=>"required",
            'title' => "required",
            'sub_title'=>"required|min:10",
             'offer'=>"required",
             
             'link'=>"required",
             'image'=>"required"
        ]);
        $slide=new HomeSlider();
        $slide->top_title=$this->top_title;
        $slide->title = $this->title ;
        $slide->sub_title =$this->sub_title ;
        $slide->offer =$this->offer ;
        $slide->link =$this->link  ;
        $slide->status=$this->status;
        $imageName= Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider',$imageName);
        $slide->image=$imageName;
        $slide->save();
        session()->flash("message","Slide Added Successfully");
       
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component');
    }
}
