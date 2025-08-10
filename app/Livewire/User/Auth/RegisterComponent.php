<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class RegisterComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $remember_me;

    #[Title('User Login | Expenses Tracker')]
    #[Layout('components.user.auth')]
    public function render()
    {
        return view('livewire.user.auth.register-component');
    }

    public function mount()
    {
        if (Auth::check()) {
            return $this->redirectRoute('dashboard', navigate: true);
        }
    }

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'remember_me' => 'required|boolean',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Auth::login($user);

        flash()->success('You are registered successfully!');
        return $this->redirectRoute('login', navigate: true);
    }
}
