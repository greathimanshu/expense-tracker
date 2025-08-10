<?php

namespace App\Livewire\Components\Admin\Partials;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.components.admin.partials.header');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        flash()->success('You are logged out successfully!');
        return $this->redirectRoute('login', navigate: true);
    }
}
