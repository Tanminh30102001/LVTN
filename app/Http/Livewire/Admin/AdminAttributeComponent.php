<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Attribute;
use Livewire\Component;

class AdminAttributeComponent extends Component
{
    public function deleteAttribute($attribute_id){
        $pattribute=ProductAttribute::find($attribute_id);
        $pattribute->delete();
        session()->flash('message','Attribute has been deleted');
    }
    public function render()
    {
        $pattribute= ProductAttribute::get();
        return view('livewire.admin.admin-attribute-component',['pattributes'=>$pattribute]);
    }
}
