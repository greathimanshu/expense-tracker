<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class LoginComponent extends Component
{
    public $email = null;
    public $password = null;
    #[Title('Admin Login | Expenses Tracker')]
    #[Layout('components.admin.auth')]
    public function render()
    {
        if (Auth::guard('admin')->check()) {
            return $this->redirectRoute('admin.dashboard', navigate: true);
        }
        return view('livewire.admin.auth.login-component');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->regenerate();
            flash()->success('You are logged in successfully!');
            return $this->redirectRoute('admin.dashboard', navigate: true);
        }

        flash()->error('Invalid email or password.');
    }
}
