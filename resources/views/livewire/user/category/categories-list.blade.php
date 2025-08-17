<div class="page-wrapper">
    <div class="content content-two">
        <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
            <div>
                <h6>Categories</h6>
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
                    <a href="add-customer.html" class="btn btn-primary d-flex align-items-center">
                        <i class="isax isax-add-circle5 me-1"></i>New Category
                    </a>
                </div>
            </div>
        </div>

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
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-nowrap datatable">
                <thead class="thead-light">
                    <tr>
                        <th class="no-sort">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all">
                            </div>
                        </th>
                        <th>Category</th>
                        <th>Created On</th>
                        <th class="no-sort">Status</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $item)
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
                                        <a href="edit-customer.html" class="dropdown-item d-flex align-items-center"><i
                                                class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i
                                                class="isax isax-archive-2 me-2"></i>Archive</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
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
        </div>
    </div>
    <!-- Delete Modal Start -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <img src="assets/img/icons/delete.svg" alt="img">
                    </div>
                    <h6 class="mb-1">Delete Customer</h6>
                    <p class="mb-3">Are you sure, you want to delete Customer?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-outline-white me-3"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="customers.html" class="btn btn-primary">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
