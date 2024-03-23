<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistIconComponent extends Component
{
    protected $listeners = ['refreshcomponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.wishlist-icon-component');
    }
}
