<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CategorList extends Component
{
    use WithPagination;

    public $search;
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $categoryId;
    public $name;
    public $icon;
    public $color;
    public $deleteId;
    public $monthly_budget;
    public $type = 'expense';

    protected $rules = [
        'name' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
        'color' => 'nullable|string|max:20',
        'monthly_budget' => 'nullable|numeric|min:0',
        'type' => 'required|in:expense,income',
    ];

    protected $queryString = ['search']; // optional: keep search in URL

    public function save()
    {
        $this->validate();

        if ($this->categoryId) {
            $category = Category::findOrFail($this->categoryId);
            $category->update([
                'name' => $this->name,
                'icon' => $this->icon,
                'color' => $this->color,
                'monthly_budget' => $this->monthly_budget,
                'type' => $this->type,
            ]);
            flash()->success('Category updated successfully.');
        } else {
            Category::create([
                'user_id' => Auth::id(),
                'name' => $this->name,
                'icon' => $this->icon,
                'color' => $this->color,
                'monthly_budget' => $this->monthly_budget,
                'type' => $this->type,
                'status' => true,
            ]);
            flash()->success('Category created successfully.');
        }

        $this->resetForm();
        $this->dispatch('close-modal');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->icon = $category->icon;
        $this->color = $category->color;
        $this->monthly_budget = $category->monthly_budget;
        $this->type = $category->type;

        $this->dispatch('open-modal');
    }

    public function resetForm()
    {
        $this->reset(['categoryId', 'name', 'icon', 'color', 'monthly_budget', 'type']);
        $this->type = 'expense'; // reset default
    }


    public function confirmDelete($id, $name)
    {
        $this->deleteId = $id;
        $this->name = $name;
        $this->dispatch('open-delete-modal'); // trigger JS to open delete modal
    }

    public function delete()
    {
        if ($this->deleteId) {
            Category::findOrFail($this->deleteId)->delete();
            flash()->success('Category deleted successfully.');
        }

        $this->deleteId = null;
        $this->name = null;
        $this->dispatch('close-delete-modal');
    }

    public function sortBy($field, $direction = 'asc')
    {
        $this->sortField = $field;
        $this->sortDirection = $direction;
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    #[Title('Users | Expenses Tracker')]
    #[Layout('components.admin.app')]
    public function render()
    {
        $categories = Category::orderBy($this->sortField, $this->sortDirection)
            ->when($this->search, function ($q) {
                $q->where(function ($query) {
                    $query->where('name', 'like', "%{$this->search}%")
                        ->orWhere('icon', 'like', "%{$this->search}%")
                        ->orWhere('color', 'like', "%{$this->search}%")
                        ->orWhere('type', 'like', "%{$this->search}%");
                });
            })
            ->paginate($this->perPage);

        return view('livewire.admin.category.categor-list', [
            'categories' => $categories
        ]);
    }
}
