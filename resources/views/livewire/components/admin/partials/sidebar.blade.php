<div>

    <div class="sidebar" id="sidebar-two">

        <!-- Start Logo -->
        <div class="sidebar-logo">
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="logo logo-normal">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="logo-small">
                <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="dark-logo">
                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="dark-small">
                <img src="{{ asset('assets/img/logo-small-white.svg') }}" alt="Logo">
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <a id="toggle_btn" href="javascript:void(0);">
                <i class="isax isax-menu-1"></i>
            </a>
        </div>
        <!-- End Logo -->

        <!--- Sidenav Menu -->
        <div class="sidebar-inner" data-simplebar>
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"><span>Main</span></li>

                    <li>
                        <ul>
                            <li @if(request()->routeIs('admin.dashboard')) class="active" @endif>
                                <a href="{{ route('admin.dashboard') }}" wire:navigate>
                                    <i class="isax isax-home-1"></i><span>Dashboard</span>
                                </a>
                            </li>

                            <li @if(request()->routeIs('admin.users')) class="active" @endif>
                                <a href={{ route('admin.users') }} wire:navigate>
                                    <i class="isax isax-user"></i><span>Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="isax isax-wallet"></i><span>Expenses</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="isax isax-money-recive"></i><span>Incomes</span>
                                </a>
                            </li>

                            <li @if(request()->routeIs('admin.categories')) class="active" @endif>
                                <a href="{{ route('admin.categories') }}" wire:navigate>
                                    <i class="isax isax-category"></i><span>Categories</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="isax isax-graph"></i><span>Budgets</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="isax isax-document-text"></i><span>Reports</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="isax isax-setting-2"></i><span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
