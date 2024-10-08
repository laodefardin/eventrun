<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='/'>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                xml:space="preserve">
                <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
      C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
                <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
                <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
            </svg>

            <span class="align-middle me-3">EventRun</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Navigation
            </li>
            <li
                class="sidebar-item {{ request()->is(['admin/dashboard', 'admin/dashboard']) ? 'active' : '' }}">
                <a class='sidebar-link' href='{{ url('admin/dashboard') }}'>
                    <i class="align-middle" data-lucide="home"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>

            <li class="sidebar-header">
                Apps
            </li>
            <li class="sidebar-item {{ request()->is(['transactions', 'transactions/*']) ? 'active' : '' }}">
                <a class='sidebar-link' href='/transactions'>
                    <i class="align-middle" data-lucide="shopping-bag"></i> <span
                        class="align-middle">Transactions</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is(['event', 'event/*']) ? 'active' : '' }}">
                <a class='sidebar-link' href='/event'>
                    <i class="align-middle" data-lucide="trello"></i> <span class="align-middle">Events</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#ecommerce" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-lucide="sliders"></i> <span
                        class="align-middle">Setting</span>
                </a>
                <ul id="ecommerce" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-products'>
                            Products <span class="badge badge-sidebar-primary">New</span>
                        </a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-products-details'>
                            Product Details <span class="badge badge-sidebar-primary">New</span>
                        </a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-orders'>
                            Orders <span class="badge badge-sidebar-primary">New</span>
                        </a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-customers'>Customers</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-invoice'>Invoice</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-pricing'>Pricing</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
