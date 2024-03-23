<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\Coupon;
use Livewire\Component;

class AdminCouponComponent extends Component
{
    use WithPagination;
    public $coupon_id;
    public function deleteCoupon(){
       
        $category=Coupon::find($this->coupon_id);
        
        $category->delete();
        session()->flash('message','Deleted');
    }
    public function render()
    {
        $coupons=Coupon::orderBy('code','ASC')->paginate(5);
        return view('livewire.admin.admin-coupon-component',['coupons'=>$coupons]);
    }
}
