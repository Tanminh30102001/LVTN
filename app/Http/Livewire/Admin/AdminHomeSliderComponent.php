<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminHomeSliderComponent extends Component
{
    public $slide_id;
   public function deleteSlide(){
    $slide=HomeSlider::find($this->slide_id);
    unlink('assets/imgs/slider/'.$slide->image);
        $slide->delete();
        session()->flash("message","Slide Deleted Successfully");
        
   }
    public function render()
    {

        $sliders=HomeSlider::orderBy('created_at','DESC')->get();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders]);
    }
}
