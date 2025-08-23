<div class="page-wrapper">
    <!-- Start Content -->
    <div class="content content-two">

        <!-- Page Header -->
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
                        data-bs-toggle="modal" data-bs-target="#add_user"><i class="isax isax-add-circle5 me-1"></i>New
                        User</a>
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

                    <div class="dropdown">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="isax isax-grid-3 me-1"></i>Column
                        </a>
                        <ul class="dropdown-menu  dropdown-menu">
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    <span>Customer</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    <span>Phone</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    <span>Counrty</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    <span>Balance</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    <span>Total Invoice</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                    <span>Created On</span>
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item d-flex align-items-center form-switch">
                                    <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                    <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                    <span>Status</span>
                                </label>
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
                        <th>Customer</th>
                        <th>Phone</th>
                        <th>Monthly Budget</th>

                        <th>Created On</th>
                        <th class="no-sort">Status</th>

                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="customer-details.html"
                                        class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                        <img src="{{ asset('assets/img/profiles/avatar-28.jpg') }}"
                                            class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-medium mb-0"><a
                                                href="customer-details.html">{{ $item->name }}</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $item->phone }}
                            </td>

                            <td>{{ $item->monthly_budget }}</td>

                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @if ($item->status == 'active')
                                    <span class="badge badge-soft-success d-inline-flex align-items-center">Active <i
                                            class="isax isax-tick-circle ms-1"></i></span>
                                @else
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center">Inactive<i
                                            class="isax isax-close-circle ms-1"></i></span>
                                @endif
                            </td>

                            <td class="action-item">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="customer-details.html"
                                            class="dropdown-item d-flex align-items-center"><i
                                                class="isax isax-eye me-2"></i>View</a>
                                    </li>
                                    <li>
                                        <a href="edit-customer.html"
                                            class="dropdown-item d-flex align-items-center"><i
                                                class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"
                                            class="dropdown-item d-flex align-items-center"><i
                                                class="isax isax-archive-2 me-2"></i>Archive</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                            wire:click="confirmDelete({{ $item->id }}, @js($item->name))"><i
                                                class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No Data Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="mt-3">
                {{ $users->links('livewire::bootstrap') }}
            </div>
        </div>
    </div>
    <div id="add_user" class="modal fade" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ $userId ? 'Edit User' : 'Add New User' }}
                    </h4>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-solid fa-x"></i></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" wire:model="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">
                                Password {!! $userId
                                    ? '<small class="text-muted">(leave blank to keep current)</small>'
                                    : '<span class="text-danger">*</span>' !!}
                            </label>
                            <input type="password" class="form-control" wire:model="password">
                            @if (!$userId)
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" wire:model="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" wire:model="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            {{ $userId ? 'Update' : 'Create' }}
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
                    <h6 class="mb-1">Delete <p class="d-inline-block text-danger">{{ $name }}</p> Category
                    </h6>
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
            let modal = new bootstrap.Modal(document.getElementById("add_user"));
            modal.show();
        });

        Livewire.on("close-modal", () => {
            let modalEl = document.getElementById("add_user");
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
