<div class="page-wrapper">
    <div class="content content-two">
        <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
            <div>
                <h6>Customers</h6>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
                <div class="dropdown">
                    <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <i class="isax isax-export-1 me-1"></i>Export
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Download as PDF</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Download as Excel</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center"
                        data-bs-toggle="modal" data-bs-target="#add_category"><i
                            class="isax isax-add-circle5 me-1"></i>New Category</a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Table Search Start -->
        <div class="mb-3">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="table-search d-flex align-items-center mb-0">
                        <div class="search-input">
                            <input type="text" placeholder="Search" class="form-control" id="search">
                            <a href="javascript:void(0);" class="btn-searchset"><i
                                    class="isax isax-search-normal fs-12"></i></a>
                        </div>
                    </div>

                </div>
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="dropdown">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="isax isax-sort me-1"></i>
                            Sort By :
                            <span class="fw-normal ms-1">
                                {{ $sortDirection === 'asc' ? 'Oldest' : 'Latest' }}
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a wire:click="sortBy('id', 'desc')" class="dropdown-item">Latest</a>
                            </li>
                            <li>
                                <a wire:click="sortBy('id', 'asc')" class="dropdown-item">Oldest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Search End -->

        <!-- Table List -->
        <div class="table-responsive">
            <table class="table table-nowrap datatable">
                <thead class="thead-light">
                    <tr>
                        <th class="no-sort">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all">
                            </div>
                        </th>
                        {{-- icon --}}
                        <th class="no-sort">Icon</th>
                        <th>Name</th>
                        <th>Default</th>
                        <th>Created On</th>
                        <th class="no-sort">Status</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox" id="customCheck1">
                                </div>
                            </td>
                            <td><i class="{{ $category->icon }}"></i>
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if ($category->is_default)
                                    <span class="badge badge-soft-success d-inline-flex align-items-center">Yes<i
                                            class="isax isax-tick-circle ms-1"></i></span>
                                @else
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center">No<i
                                            class="isax isax-close-circle ms-1"></i></span>
                                @endif
                            </td>
                            <td>{{ $category->created_at->format('d M, Y') }}</td>
                            <td>
                                @if ($category->type == 'income')
                                    <span class="badge badge-soft-success d-inline-flex align-items-center">Income <i
                                            class="isax isax-tick-circle ms-1"></i></span>
                                @else
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center">Expense<i
                                            class="isax isax-close-circle ms-1"></i></span>
                                @endif
                            </td>
                            <td class="action-item">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            wire:click="edit({{ $category->id }})">
                                            <i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                            wire:click="confirmDelete({{ $category->id }}, '{{ $category->name }}')">
                                            <i class="isax isax-trash me-2"></i>Delete
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-3">
                {{ $categories->links('livewire::bootstrap') }}
            </div>
        </div>
    </div>


    <div id="add_category" class="modal fade" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ $categoryId ? 'Edit Category' : 'Add New Category' }}
                    </h4>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fa-x"></i></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Icon</label>
                            <input type="text" class="form-control" wire:model="icon">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-control" wire:model="color">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Monthly Budget</label>
                            <input type="number" class="form-control" wire:model="monthly_budget">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type <span class="text-danger">*</span></label>
                            <select class="form-select" wire:model="type">
                                <option value="expense">Expense</option>
                                <option value="income">Income</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            {{ $categoryId ? 'Update' : 'Create' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal Start -->
    <div class="modal fade" id="delete_modal" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
                    </div>
                    <h6 class="mb-1">Delete <p class="d-inline-block text-danger">{{$name}}</p> Category</h6>
                    <p class="mb-3">Are you sure you want to delete this category?</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-white me-3"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" wire:click="delete" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        Livewire.on("open-modal", () => {

            let modal = new bootstrap.Modal(document.getElementById("add_category"));
            modal.show();
        });

        Livewire.on("close-modal", () => {
            let modalEl = document.getElementById("add_category");
            let modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) modal.hide();
        });

        Livewire.on("open-delete-modal", () => {
            let modal = new bootstrap.Modal(document.getElementById("delete_modal"));
            modal.show();
        });

        Livewire.on("close-delete-modal", () => {
            let modalEl = document.getElementById("delete_modal");
            let modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) modal.hide();
        });
    </script>
@endpush
