<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('susscess_message','Item added in Cart');
        return redirect()->route('shop.cart');
    }
    public function render()
    {
        $pcategories= Category::where('is_popular',1)->get();
        $pproducts=Product::orderBy('quantity','DESC')->get()->take(8);
        $slides=HomeSlider::where('status',1)->get();
        $lproducts =Product::orderBy('created_at','DESC')->get()->take(8);
        $fproducts =Product::where('featured',1)->inRanDomOrder()->get()->take(8);
        if(Auth::check()){
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        
        return view('livewire.home-component',['slides'=>$slides,'lproducts'=>$lproducts,'fproducts'=>$fproducts,'pproducts'=>$pproducts,'pcategories'=>$pcategories]);
    }
}
