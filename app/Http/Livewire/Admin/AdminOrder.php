<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AdminOrder extends Component
{
    public function updateStatus($order_id,$status){
        $order=Order::find($order_id);
        $order->status=$status;
        $order->save();
        session()->flash('message','Update status successfully');
    }
    public function updateStatusDelivery($order_id,$status_delivery){
        $order=Order::find($order_id);
        $order->status_delivery=$status_delivery;
        $order->save();
        session()->flash('message','Update status of Delivery successfully');
    }
    public function render()
    {
        $orders=Order::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-order',['orders'=>$orders]);
    }
}
