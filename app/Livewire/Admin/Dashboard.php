<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Admin Dashboard | Expenses Tracker')]
    #[Layout('components.admin.app')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
