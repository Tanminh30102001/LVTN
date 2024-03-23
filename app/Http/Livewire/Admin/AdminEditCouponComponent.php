<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
class AdminEditCouponComponent extends Component
{
    public $coupon_id;
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $desc;
    public function mount($coupon_id){
        $coupon= Coupon::find($coupon_id);
        $this->code=$coupon->code;
        $this->type=$coupon->type;
        $this->value=$coupon->value;
        $this->cart_value=$coupon->cart_value;
        $this->desc=$coupon->desc;
        $this->coupon_id=$coupon->id;
        $this->expiry_date=$coupon->expiry_date;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'code'=>'required',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'desc'=>'required',
            'expiry_date'=>'required'
        ]);
    }
    public function EditCoupon(){
        $this->validate([
            'code'=>'required',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'desc'=>'required',
            'expiry_date'=>'required'
        ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code=$this->code;
        $coupon->type=$this->type;
        $coupon->value=$this->value;
        $coupon->cart_value=$this->cart_value;
        $coupon->desc=$this->desc;
        $coupon->expiry_date=$this->expiry_date;
        $coupon->save();
        session()->flash('message','Coupon Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component');
    }
}
