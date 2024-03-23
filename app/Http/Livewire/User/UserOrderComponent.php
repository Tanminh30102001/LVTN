<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserOrderComponent extends Component
{   
    use WithPagination;    
    public $searchTerm='';

    public function render()
    {
        $search=$this->searchTerm;
        $orders=Order::orderBy('created_at','DESC')->where('id',$search)->orWhere('user_id',Auth::user()->id)->paginate(5);
        return view('livewire.user.user-order-component',['orders'=>$orders]);
    }
}
