<?php

namespace App\Livewire\User\Expense;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class ExpenseList extends Component
{

    #[Title('User Expenses | Expenses Tracker')]
    #[Layout('components.user.app')]
    public function render()
    {
        return view('livewire.user.expense.expense-list');
    }
}
