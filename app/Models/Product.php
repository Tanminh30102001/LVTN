<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetails::class,'product_id');
    }
    public function subCategories(){
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
    public function attributeValues(){
        return $this->hasMany(AttributeValue::class,'product_id');
    }
}
