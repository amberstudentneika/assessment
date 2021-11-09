<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class Login extends Component
{

    public $lvEmail;
    public $lvPassword;

    public function Login()
    {
        $this->validate([
            'lvEmail' => 'required|email',
            'lvPassword' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $this->lvEmail,
            'password' => $this->lvPassword]))
        {
            if(Auth::User()->role=='0')
            {
                return redirect('/home/admin');
            }elseif(Auth::User()->role=='2'){
                return redirect('/home/teacher');
            }else{
                return redirect('/home/student');
            }

         }else{
            session()->flash('message','Invalid login!');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
