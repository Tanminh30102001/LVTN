<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    use WithPagination;
    public $pageSize =10;
    public $orderBy ="Default Sorting";
    public $min_value=0;
    public $max_value=1000000;

    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('susscess_message','Item added in Cart');
        return redirect()->route('shop.cart');
    }
    public function changePageSize($size){
        $this->pageSize=$size;
    }
    public function changeOrderBy($order){
        
        $this->orderBy =$order;
    }
    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }
    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id ==$product_id ){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                    return;
        }
    }
}
    public function render()
    {
      
    //     $query = Product::whereBetween('regular_price', [$this->min_value, $this->max_value]);

    // if ($this->orderBy == 'Price:Low to High') {
    //     $sortedProducts = $query->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
    // } elseif ($this->orderBy == 'Price:High to Low') {
    //     $sortedProducts = $query->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
    // } elseif ($this->orderBy == 'Sort by Newness') {
    //     $sortedProducts = $query->orderBy('created_at', 'DESC')->paginate($this->pageSize);
    // } else {
    //     $sortedProducts = $query->paginate($this->pageSize);
    // }
    $query = Product::whereBetween('regular_price', [$this->min_value, $this->max_value]);

    if ($this->orderBy == 'Price:Low to High') {
        $sortedProducts = $query->orderBy('regular_price', 'ASC')->get();
    } elseif ($this->orderBy == 'Price:High to Low') {
        $sortedProducts = $query->orderBy('regular_price', 'DESC')->get();
    } elseif ($this->orderBy == 'Sort by Newness') {
        $sortedProducts = $query->orderBy('created_at', 'DESC')->get();
    } else {
        $sortedProducts = $query->get();
    }
    $categories = Category::orderBy('name', 'ASC')->get();
    if(Auth::check()){
        Cart::instance('cart')->store(Auth::user()->email);
        Cart::instance('wishlist')->store(Auth::user()->email);
    }
    return view('livewire.shop-component', ['products' => $sortedProducts, 'categories' => $categories]);
    }
}
