<?php

namespace App\Http\Livewire\Admin;

use App\Models\AttributeValue;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Subcategory;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $slug;
    public $short_desc;
    public $desc;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status="instock";
    public $featured=0;
    public $quanity;
    public $image;
    public $category_id;
    public $newImage;
    public $images;
    public $newimages;
    public $scategory_id;
    ////////////////////////////
    public $attr;
    public $inputs=[];
    public $attr_array=[];
    public $attr_values;
    function mount($product_id){
        $product =Product::find($product_id);
        $this->product_id=$product->id;
        $this->name =$product->name ;
        $this->slug  =$product->slug ;
        $this->short_desc=$product->short_desc ;
        $this->desc   =$product->desc  ;
        $this->regular_price=$product->regular_price;
        $this->sale_price =$product->sale_price;
        $this->sku =$product->sku ;
        $this->stock_status=$product->stock_status;
        $this->featured=$product->featured ;
        $this->quanity =$product->quanity ;
        $this->image =$product->image;
        $this->images =explode('-',$product->images);
        $this->category_id=$product->category_id;
        $this->scategory_id=$product->subcategory_id;
        $this->inputs=$product->attributeValues->where('product_id',$product->id)->unique('product_attribute_id')->pluck('product_attribute_id');
        $this->attr_array=$product->attributeValues->where('product_id',$product->id)->unique('product_attribute_id')->pluck('product_attribute_id');

        foreach($this->attr_array as $a_arr){
            $allAttributeValue = AttributeValue::where('product_id',$product->id)->where('product_attribute_id',$a_arr)->get()->pluck('value');
            $valueString='';
            foreach($allAttributeValue as $value){
                $valueString= $valueString.$value.',';
            }
            $this->attr_values[$a_arr]=rtrim($valueString,',');

        }
    }
    public function addAttr(){
        if(!$this->attr_array->contains($this->attr)){
            $this->inputs->push($this->attr);
            $this->attr_array->push($this->attr);
        }
    }
    public function generateSlug() {
        $this->slug=Str::slug($this->name);
    }

    public function updateProduct(){
        $this->validate( [
            'name'=>'required',
            'slug'=>'required',
            'short_desc' => "required",
            'desc'=>"required",
            'regular_price'=>'required | numeric ',
            'sale_price'=>'numeric',
            'sku'=>'required',
            'stock_status'=>'required',
            'featured'=>'required',
            'quanity'=>'required',
            'image'=>'required ',
            'category_id'=>'required'

        ]);
        $product= Product::find($this->product_id);
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->short_desc=$this->short_desc;
        $product->desc=$this->desc;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->sku=$this->sku;
        $product->stock_status=$this->stock_status;
        $product->featured=$this->featured;
        $product->quantity=$this->quanity;
        if($this->newImage){
            // unlink('assets/imgs/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('products',$imageName);
            $product->image=$imageName;
        }
        if($this->newimages){
            $images=explode('-',$product->images);
            foreach($images as $image){
                if($image){
                    unlink('assets/imgs/products/'.$image);
                }
            }
        }
       
        $imagesname=[];
        foreach($this->newimages as $key=>$image){
            $imgName = Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('products',$imgName);
            // $imagesname .= $imagesname == '' ? $imgName : '-' . $imgName;
            $imagesname[]='-'.$imgName;
        }
        // $product->images= $imagesname;
        $product->images=implode('-', $imagesname);
        if($this->scategory_id){
            $product->subcategory_id=$this->scategory_id;
        }
        $product->category_id=$this->category_id;
        $product->save();
        AttributeValue::where('product_id',$product->id)->delete();
        foreach($this->attr_values as $key=>$attr_value)
        {
            $avalues=explode(",",$attr_value);
            foreach($avalues as $avalue){
                $attributevalue= new AttributeValue();
                $attributevalue->product_attribute_id=$key;
                $attributevalue->values=$avalue;
                $attributevalue->product_id=$product->id;
                $attributevalue->save();
            }
        }
        session()->flash('message','Product has been updated');
        
    }
    public function render()
    {
        $scategories=Subcategory::where('category_id',$this->category_id)->get();
        $pattrs=ProductAttribute::all();
        $categories=Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories,'pattrs'=>$pattrs,'scategories'=>$scategories]);
    }
}
