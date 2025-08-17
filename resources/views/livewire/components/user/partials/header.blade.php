<div class="header">
    <div class="main-header">

        <!-- Logo -->
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('dashboard') }}" class="dark-logo">
                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">
                <div class="me-auto d-flex align-items-center" id="header-search">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-divide mb-0">
                            <li class="breadcrumb-item d-flex align-items-center"><a href="{{ route('dashboard') }}"
                                    wire:navigate><i class="isax isax-home-2 me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                </div>

                <div class="d-flex align-items-center">

                    <!-- Light/Dark Mode Button -->
                    <div class="me-2 theme-item">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle btn btn-menubar">
                            <i class="isax isax-moon"></i>
                        </a>
                        <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle btn btn-menubar">
                            <i class="isax isax-sun-1"></i>
                        </a>
                    </div>

                    <!-- User Dropdown -->
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <span class="avatar online">
                                <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="Img"
                                    class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu p-2">
                            <div class="d-flex align-items-center bg-light rounded-1 p-2 mb-2">
                                <span class="avatar avatar-lg me-2">
                                    <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="img"
                                        class="rounded-circle">
                                </span>
                                <div>
                                    <h6 class="fs-14 fw-medium mb-1">Jafna Cremson</h6>
                                    <p class="fs-13">Administrator</p>
                                </div>
                            </div>

                            <!-- Item-->
                            <a class="dropdown-item d-flex align-items-center" href="account-settings.html">
                                <i class="isax isax-profile-circle me-2"></i>Profile Settings
                            </a>

                            <!-- Item-->
                            <a class="dropdown-item d-flex align-items-center" href="inventory-report.html">
                                <i class="isax isax-document-text me-2"></i>Reports
                            </a>

                            <!-- Item-->
                            <div
                                class="form-check form-switch form-check-reverse d-flex align-items-center justify-content-between dropdown-item mb-0">
                                <label class="form-check-label" for="notify"><i
                                        class="isax isax-notification me-2"></i>Notifications</label>
                                <input class="form-check-input" type="checkbox" role="switch" id="notify">
                            </div>

                            <hr class="dropdown-divider my-2">

                            <!-- Item-->
                            <li>
                                <button wire:click="logout" class="dropdown-item logout d-flex align-items-center">
                                    <i class="isax isax-logout me-2"></i> Signout
                                </button>
                            </li>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu profile-dropdown">
            <a href="#" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="avatar avatar-md online">
                    <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="Img"
                        class="img-fluid rounded-circle">
                </span>
            </a>
            <ul class="dropdown-menu p-2 mt-0">
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="profile.html">
                        <i class="isax isax-profile-circle me-2"></i>Profile Settings
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="reports.html">
                        <i class="isax isax-document-text me-2"></i>Reports
                    </a>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="account-settings.html">
                        <i class="isax isax-setting me-2"></i>Settings
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" wire:click="logout"
                        class="dropdown-item logout d-flex align-items-center">
                        <i class="isax isax-logout me-2"></i> Signout
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>
