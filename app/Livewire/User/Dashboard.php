<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('User Dashboard | Expenses Tracker')]
    #[Layout('components.user.app')]
    public function render()
    {
        // Auth::logout();
        return view('livewire.user.dashboard');
    }
}
