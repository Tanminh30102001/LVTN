<?php

namespace App\Http\Livewire\User;

use App\Models\OrderDetails;
use App\Models\Review;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $order_details_id;
    public $rating;
    public $comment;
    public  function mount($order_details_id){
        $this->order_details_id=$order_details_id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'rating'=>"required",
            'comment'=>"required"
        ]);
    }
    public function addReview(){
        $this->validate([
            'rating'=>"required",
            'comment'=>"required"
        ]);
        $review=new Review();
        $review->rating=$this->rating;
        $review->comment=$this->comment;
        $review->order_detail_id=$this->order_details_id;
        $review->save();
        $orderDetails=OrderDetails::find($this->order_details_id);
        $orderDetails->rstatus=true;
        $orderDetails->save();
        session()->flash('review_message','Review successsfully and thanks for your review');
        return redirect()->route('user.orderdetails',[$orderDetails->order_id])->with('review_message','Review successsfully and thanks for your review');
    }
    public function render()
    {
        $orderDetails=OrderDetails::find($this->order_details_id);
        return view('livewire.user.user-review-component',['orderDetails'=>$orderDetails]);
    }
}
