<?php

namespace App\Http\Livewire;

use App\Mail\confirmOrderMail;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Carbon\Carbon;
use Cart;
use Error;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CheckOutComponent extends Component
{

    public $user_name;
    public $user_phone;
    public $user_address;
    public $notes;
    public $status = false;
    public $process = false;
    public $couponcode;
    public $discount;
    public $subtotalAfterDiscount;
    public $totalAfterDiscount;

    public function updated($field)
    {
        $this->validateOnly($field, [

            'user_name' => 'required',
            'user_phone' => "required|numeric",
            "user_address" => "required",
        ]);
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }
    public function applyCoupon()
    {

        $coupon = Coupon::where('code', $this->couponcode)->where('expiry_date', '>=', Carbon::today())->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if (!$coupon) {
            session()->flash('cp_mess', 'Code coupon invalid');
            return;
        }
        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value
        ]);
        session()->flash('cp_applied', 'Coupon applied');
    }
    public function calculateDiscount()
    {
        if (session()->has('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = floatval(session()->get('coupon')['value']);
                // dd($this->discount);
            } else {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value']) / 100;
            }
            // dd(gettype(Cart::instance('cart')->subtotal()),Cart::instance('cart')->subtotal());
            $this->subtotalAfterDiscount = intval(str_replace(',', '', Cart::instance('cart')->subtotal())) - intval(session()->get('coupon')['value']);
            // dd(intval(str_replace(',', '', Cart::instance('cart')->subtotal())));
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + config('cart.tax');
        }
    }
    public function placeOrder()
    {
        $this->validate([

            'user_phone' => "required|numeric",
            "user_address" => "required",
        ]);
        $order = new Order();
        $order->user_id = Auth::user()->id;
        // $order->total=str_replace(',','',Cart::instance('cart')->total()) ;
        // $order->total=session()->get('checkout')['total'];
        $order->total = str_replace(',', '', session()->get('checkout')['total']);
        $order->code = rand(1000, 999999999);
        $order->discount = session()->get('checkout')['discount'];
        $order->email = Auth::user()->email;
        $order->user_name =Auth::user()->name;
        $order->user_phone = $this->user_phone;
        $order->user_address = $this->user_address;
        $order->notes = $this->notes;
        $order->status = false;
        $this->process = true;
        $order->save();
        foreach (Cart::instance('cart')->content() as $item) {
            $orderDetails = new OrderDetails();

            $orderDetails->product_id = $item->id;
            $orderDetails->order_id = $order->id;
            $orderDetails->regular_price = $item->price;
            $orderDetails->quantity = $item->qty;
            $product = Product::find($orderDetails->product_id);
            $product->quantity = $product->quantity - $orderDetails->quantity;
            $option = [
                'color' => $item->options->color,
                'size' => $item->options->size
            ];

            $orderDetails->options = json_encode($option);;

            $product->save();
            $orderDetails->save();
        }


        // $order_id=$order->id;
        // $orderD =OrderDetails::where('order_id',$order_id)->get();

        Mail::to($order->email)->send(new confirmOrderMail($order));
        Cart::instance('cart')->destroy();
        session()->flash('message', 'Orderd successfully');
        return redirect(route('thankyou'));
    }

    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->calculateDiscount();
            }
        }
        return view('livewire.check-out-component');
    }
}
