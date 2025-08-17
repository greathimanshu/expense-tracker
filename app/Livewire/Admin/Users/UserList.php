<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;
    // public $listeners = ['refreshUsers'];
    public $selectedUser;
    public $showModal = false;
    public function mount() {}


    public function sortBy($field, $direction = 'asc')
    {
        $this->sortField = $field;
        $this->sortDirection = $direction;
        $this->resetPage();
    }

    #[Title('Users | Expenses Tracker')]
    #[Layout('components.admin.app')]
    public function render()
    {
        $users = User::orderBy($this->sortField, $this->sortDirection)
            ->when(
                $this->search,
                fn($q) =>
                $q->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%")
            )
            ->paginate($this->perPage);

        return view('livewire.admin.users.user-list', [
            'users' => $users
        ]);
    }
}
