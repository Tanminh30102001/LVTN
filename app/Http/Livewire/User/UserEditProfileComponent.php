<?php

namespace App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class UserEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $phone;
    public $address;
    public $newimage;
    public $image;
    // public $user_id;

    public function mount(){
        // $this->user_id=Auth::user()->id;
        $user = Auth::user();
        $this->name =$user->name;
        $this->phone =$user->phone;
        $this->address=$user->address;
        $this->image;   
    }
    public function updateUser(){
        $user = Auth::user();
        $this->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
        ]);
        // if($this->newimage){
        //     // unlink('assets/imgs/products/'.$user->image);
        //     $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
        //     $this->newimage->storeAs('user',$imageName);
        //     $user->image=$imageName;
        // }
        
        // User::where('id', $user->id)->update([
        //     'name' => $this->name,
        //     'phone' => $this->phone,
        //     'address' => $this->address,

        //     'image'=>$this->newimage
        // ]);
        $user=User::find(auth()->user()->id);
        
        $user->name=$this->name;
        $user->phone =$this->phone;
        $user->address=$this->address;
        if($this->newimage){
            // unlink('assets/imgs/products/'.$user->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('user',$imageName);
            $user->image=$imageName;
        }
        
        $user->save();
      session()->flash("message"," Updated Successfully");

    }
    public function render()
    {
        return view('livewire.user.user-edit-profile-component');
    }
}
