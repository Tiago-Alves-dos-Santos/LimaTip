<?php

namespace App\Http\Livewire\Components\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class FormMyData extends Component
{
    public $name = null;
    public $email = null;
    public $password = null;
    public $password_confirmation = null;
    public $object = null;

    protected $rules = [
        'email' => 'required|email',
        'name' => 'required|min:5',
        'password' => 'nullable|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'nullable|min:6'
    ];

    public function mount()
    {
        $user = User::find(1);
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        $this->validate();
        try{
            if(empty($this->password)){
                User::where('id', 1)->update([
                    'name' => mb_strtoupper($this->name),
                    'email' => $this->email
                ]);
            }else{
                User::where('id', 1)->update([
                    'name' => mb_strtoupper($this->name),
                    'email' => $this->email,
                    'password' => Hash::make($this->password)
                ]);
            }
            $this->reset(['password', 'password_confirmation']);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.components.admin.form-my-data');
    }
}
