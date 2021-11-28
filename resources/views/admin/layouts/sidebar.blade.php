<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/logo/Transparan.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8; margin-bottom: 30px">
        <span class="brand-text font-weight-light">asdasd</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/logo/Transparan.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-header">HEADER</li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Logo
                        </p>
                    </a>
                </li> --}}
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">CONTENT</li>
                <li class="nav-item">
                    <a href="{{ route('banner') }}"
                        class="nav-link {{ request()->is('banner*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('content') }}"
                        class="nav-link {{ request()->is('content*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Content Main
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team-cms') }}"
                        class="nav-link {{ request()->is('team-cms*') ? 'active' : '' }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Teams
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service-cms') }}"
                        class="nav-link {{ request()->is('service-cms*') ? 'active' : '' }}">
                        <i class="fas fa-server"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news-cms') }}"
                        class="nav-link {{ request()->is('news-cms*') ? 'active' : '' }}">
                        <i class="far fa-newspaper"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carousel') }}"
                        class="nav-link {{ request()->is('carousel*') ? 'active' : '' }}">
                        <i class="fas fa-images"></i>
                        <p>
                            Carousel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us-cms') }}"
                        class="nav-link {{ request()->is('contact-us-cms*') ? 'active' : '' }}">
                        <i class="fas fa-address-book"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about-cms') }}"
                        class="nav-link {{ request()->is('about-cms*') ? 'active' : '' }}">
                        <i class="fas fa-address-card"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('message') }}"
                        class="nav-link {{ request()->is('message*') ? 'active' : '' }}">
                        <i class="fas fa-envelope-open-text"></i>
                        <p>
                            Message
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('sosmed') }}"
                        class="nav-link {{ request()->is('sosmed*') ? 'active' : '' }}">
                        <i class="fas fa-user-friends"></i>
                        <p>
                            Social Media
                        </p>
                    </a>
                </li>
                <li class="nav-header">FOOTER</li>
                <li class="nav-item">
                    <a href="{{ route('footer') }}"
                        class="nav-link {{ request()->is('footer*') ? 'active' : '' }}">
                        <i class="fas fa-sliders-h"></i>
                        <p>
                            Footer
                        </p>
                    </a>
                </li>
               
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
