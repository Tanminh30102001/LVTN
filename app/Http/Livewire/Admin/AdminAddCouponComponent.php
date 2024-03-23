<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminAddCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $desc;
    public function updated($fields){
        $this->validateOnly($fields,[
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'expiry_date'=>'required',
            'desc'=>'required'
        ]);
    }
    public function storeCoupon(){
        $this->validate([
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'expiry_date'=>'required',
            'desc'=>'required'
        ]);
        $coupon = new Coupon();
        $coupon->code=$this->code;
        $coupon->type=$this->type;
        $coupon->value=$this->value;
        $coupon->cart_value=$this->cart_value;
        $coupon->expiry_date= $this->expiry_date;
        $coupon->desc=$this->desc;
        $coupon->save();
        session()->flash('message','Coupon Added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupon-component');
    }
}
