<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class AdminUserComponent extends Component
{      
    public function render()
    {
      
        $users=User::paginate(10);
        return view('livewire.admin.admin-user-component',['users'=>$users]);
    }
}
