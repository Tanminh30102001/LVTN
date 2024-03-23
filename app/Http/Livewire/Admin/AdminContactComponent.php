<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function render()
    {
        $contacts=Contact::paginate(10);
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts]);
    }
}
