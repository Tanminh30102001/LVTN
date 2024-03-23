<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;
class DetailsComponent extends Component
{
    public $slug;
    public $colors=[];
    public $sizes=[];

    public $options=[];
    

    public function selectSizes($size){
        if(!in_array($size,$this->sizes)){
            $this->sizes=[$size];
        }
    }
    public function selectColors($color){
        if(!in_array($color,$this->colors)){
            $this->colors=[$color];
          
        }

    }
    
    public function mount($slug){
        $this->slug=$slug;

    }
    public function store($product_id,$product_name,$product_price){

        // $options = [
        //     'size' => $this->sizes,
        //     'color' => $this->colors,
        // ];
        // $options = array_merge($this->colors,$this->sizes);
        $options = [
            'size'=>  $this->sizes,
            'color'=>  $this->colors,
        ];
        // dd($options);
        if(empty($this->sizes)&& empty($this->colors)){
            session()->flash('chose_size_color', 'Bạn chưa chọn màu và kích thước');
            
        }else{
            Cart::instance('cart')->add(['id'=>$product_id,'name'=>$product_name,'qty'=>1,'price'=>$product_price,'options'=>$options])->associate('\App\Models\Product');
            //    dd(Cart::content());
            session()->flash('sucess_message','Item added in cart');
            return redirect()->route('shop.cart');
        }
        
        

    }
    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }
    public function render()
    {
        
        $product= Product::where('slug',$this->slug)->first();
        $rproducts = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts =Product::latest()->take(4)->get();
        $categories=Category::orderBy('name','DESC')->get();
        return view('livewire.details-component',['product'=>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts,'categories'=>$categories]);
    }
}
