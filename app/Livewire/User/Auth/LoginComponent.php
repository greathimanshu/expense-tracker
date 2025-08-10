<?php

namespace App\Livewire\User\Auth;

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
}
