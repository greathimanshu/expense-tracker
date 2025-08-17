<div class="page-wrapper">

    <!-- Start Content -->
    <div class="content">

        <!-- Start Breadcrumb -->
        <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
            <div>
                <h6>Dashboard</h6>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <div class="bg-primary rounded welcome-wrap position-relative mb-3">

            <!-- start row -->
            <div class="row">
                <div class="col-lg-8 col-md-9 col-sm-7">
                    <div>
                        <h5 class="text-white mb-1">Good Morning, {{ Auth::user()->name }}</h5>
                        <p class="text-white mb-3">You have 15+ invoices saved to draft that has to send to customers
                        </p>
                        <div class="d-flex align-items-center flex-wrap gap-3">
                            <p class="d-flex align-items-center fs-13 text-white mb-0">
                                <i class="isax isax-calendar5 me-1"></i> {{ now()->format('l, d M Y') }}
                            </p>
                            <p class="d-flex align-items-center fs-13 text-white mb-0">
                                <i class="isax isax-clock5 me-1"></i> {{ now()->format('h:i A') }}
                            </p>

                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

            <div class="position-absolute end-0 top-50 translate-middle-y p-2 d-none d-sm-block">
                <img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img">
            </div>
        </div>

    </div>
</div>
