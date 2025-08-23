<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class UserList extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;

    // form fields
    public $userId;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $status = 'active';

    // delete
    public $deleteId;
    public $deleteName;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'phone' => 'nullable|string|max:20',
        'status' => 'required|in:active,inactive',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();
    }

    public function save()
    {
        $data = $this->validate();

        if ($this->userId) {
            // update user
            $user = User::findOrFail($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'status' => $this->status,
            ]);
            if ($this->password) {
                $user->update(['password' => Hash::make($this->password)]);
            }
            flash()->success('User updated successfully.');
        } else {
            // create user
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'phone' => $this->phone,
                'status' => $this->status,
            ]);
            flash()->success('User created successfully.');
        }

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    public function confirmDelete($id, $name)
    {
        $this->deleteId = $id;
        $this->deleteName = $name;
        $this->dispatch('open-delete-modal');
    }

    public function delete()
    {
        User::findOrFail($this->deleteId)->delete();
        flash()->success("User '{$this->deleteName}' deleted successfully.");

        $this->deleteId = null;
        $this->deleteName = null;
        $this->dispatch('close-delete-modal');
    }

    protected function resetForm()
    {
        $this->reset(['userId', 'name', 'email', 'password', 'phone', 'status']);
        $this->status = 'active';
    }

    #[Title('Users | Expenses Tracker')]
    #[Layout('components.admin.app')]
    public function render()
    {
        $users = User::orderBy($this->sortField, $this->sortDirection)
            ->when(
                $this->search,
                fn($q) =>
                $q->where(function ($query) {
                    $query->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%")
                        ->orWhere('phone', 'like', "%{$this->search}%");
                })
            )
            ->paginate($this->perPage);

        return view('livewire.admin.users.user-list', compact('users'));
    }
}
