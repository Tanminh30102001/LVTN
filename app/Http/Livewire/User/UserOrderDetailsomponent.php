<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class UserOrderDetailsomponent extends Component
{
    public $order_id;
    public $reason_cancel;
    public $showForm = false;

    public function showForm()
    {
        $this->showForm = true;
    }

    public function mount($order_id){
        $order=Order::find($order_id);

        $this->order_id=$order->id;
        $this->reason_cancel=$order->reason_cancel;
    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'reason_cancel'=>'required'
        ]);
    }
    public function cancelOrder(){
        $this->validate([
            'reason_cancel'=>'required'
        ]);
        $order=Order::find($this->order_id);
        // $orderItems = $order->orderItems;
        $orderDetails = $order->orderDetails()->with('product')->get();
        foreach ($orderDetails as $orderDetail) {
            $product = $orderDetail->product;

            // Đảm bảo sản phẩm tồn tại
            if ($product) {
                $product->quantity += $orderDetail->quantity;
                $product->save();
            }
        }
        $order->status_delivery='canceled';

        $order->reason_cancel=$this->reason_cancel;
        $order->save();
        
        $this->showForm=false;
        session()->flash('cancel_message','Đã hủy đơn hàng ');
    }
    public function render()
    {
        $order=Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.user.user-order-detailsomponent',['order'=>$order]);
    }
}
