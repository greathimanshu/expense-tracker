<?php

namespace App\Livewire\User\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class LoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    #[Title('User Login | Expenses Tracker')]
    #[Layout('components.user.auth')]
    public function render()
    {
        return view('livewire.user.auth.login-component');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->regenerate();
            flash()->success('You are logged in successfully!');
            return $this->redirectRoute('dashboard', navigate: true);
        }

        flash()->error('Invalid email or password.');
    }
}
