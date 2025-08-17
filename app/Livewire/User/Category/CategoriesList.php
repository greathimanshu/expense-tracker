<?php

namespace App\Livewire\User\Category;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class CategoriesList extends Component
{
    #[Title('User Expenses | Expenses Tracker')]
    #[Layout('components.user.app')]
    public function render()
    {
        return view('livewire.user.category.categories-list', [
            'categories' => []
        ]);
    }
}
