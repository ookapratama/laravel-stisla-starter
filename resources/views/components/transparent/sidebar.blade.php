<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand sidebar-gone-show"><a href="/">Stisla</a></div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $menu == 'dashboard' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('dashboard/general') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('dashboard.general') }}">General Dashboard</a></li>
                    <li class="{{ Request::is('dashboard/ecommerce') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('dashboard.ecommerce') }}">Ecommerce Dashboard</a></li>
                </ul>
            </li>

            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown {{ $menu == 'layout' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout/default') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('layout.default') }}">Default Layout</a></li>
                    <li class="{{ Request::is('layout/transparent') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('layout.transparent') }}">Transparent Sidebar</a></li>
                    <li class="{{ Request::is('layout/top-navigation') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('layout.top-navigation') }}">Top Navigation</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('blank') ? 'active' : '' }}"><a class="nav-link" href="{{ route('blank') }}"><i
                        class="far fa-square"></i> <span>Blank
                        Page</span></a>
            </li>

            <li class="nav-item dropdown {{ $menu == 'bootstrap' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Bootstrap</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('bootstrap/alert') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.alert') }}">Alert</a></li>
                    <li class="{{ Request::is('bootstrap/badge') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.badge') }}">Badge</a></li>
                    <li class="{{ Request::is('bootstrap/breadcrumb') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.breadcrumb') }}">Breadcrumb</a></li>
                    <li class="{{ Request::is('bootstrap/button') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.button') }}">Buttons</a></li>
                    <li class="{{ Request::is('bootstrap/card') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.card') }}">Card</a></li>
                    <li class="{{ Request::is('bootstrap/carousel') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.carousel') }}">Carousel</a></li>
                    <li class="{{ Request::is('bootstrap/collapse') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.collapse') }}">Collapse</a></li>
                    <li class="{{ Request::is('bootstrap/dropdown') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.dropdown') }}">Dropdown</a></li>
                    <li class="{{ Request::is('bootstrap/form') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.form') }}">Form</a></li>
                    <li class="{{ Request::is('bootstrap/list-group') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.list-group') }}">List Group</a></li>
                    <li class="{{ Request::is('bootstrap/media-object') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.media-object') }}">Media Object</a></li>
                    <li class="{{ Request::is('bootstrap/modal') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.modal') }}">Modal </a></li>
                    <li class="{{ Request::is('bootstrap/nav') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.nav') }}">Nav </a></li>
                    <li class="{{ Request::is('bootstrap/navbar') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.navbar') }}">Navbar </a></li>
                    <li class="{{ Request::is('bootstrap/pagination') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.pagination') }}">Pagination </a></li>
                    <li class="{{ Request::is('bootstrap/popover') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.popover') }}">Popover </a></li>
                    <li class="{{ Request::is('bootstrap/progress') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.progress') }}">Progress </a></li>
                    <li class="{{ Request::is('bootstrap/table') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.table') }}">Table </a></li>
                    <li class="{{ Request::is('bootstrap/tooltip') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.tooltip') }}">Tooltip </a></li>
                    <li class="{{ Request::is('bootstrap/typography') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('bootstrap.typography') }}">Typography </a></li>
                </ul>
            </li>

            <li class="menu-header">Stisla</li>
            <li class="nav-item dropdown {{ $menu == 'components' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Components</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('components/article') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.article') }}">Article </a></li>
                    <li class="{{ Request::is('components/avatar') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.avatar') }}">Avatar </a></li>
                    <li class="{{ Request::is('components/chat-box') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.chat-box') }}">Chat Box </a></li>
                    <li class="{{ Request::is('components/empty-state') ? 'active' : '' }}"><a
                            class="nav-link beep beep-sidebar" href="{{ route('components.empty-state') }}">Empty
                            State </a>
                    </li>
                    <li class="{{ Request::is('components/gallery') ? 'active' : '' }}"><a
                            class="nav-link beep beep-sidebar" href="{{ route('components.gallery') }}">Gallery</a>
                    </li>
                    <li class="{{ Request::is('components/hero') ? 'active' : '' }}"><a
                            class="nav-link beep beep-sidebar" href="{{ route('components.hero') }}">Hero</a>
                    </li>
                    <li class="{{ Request::is('components/multiple-upload') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.multiple-upload') }}">Multiple Upload</a>
                    </li>
                    <li class="{{ Request::is('components/pricing') ? 'active' : '' }}"><a
                            class="nav-link beep beep-sidebar" href="{{ route('components.pricing') }}">Pricing</a>
                    </li>
                    <li class="{{ Request::is('components/statistic') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.statistic') }}">Statistic</a>
                    </li>
                    <li class="{{ Request::is('components/tab') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.tab') }}">Tab</a>
                    </li>
                    <li class="{{ Request::is('components/table') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.table') }}">Table</a>
                    </li>
                    <li class="{{ Request::is('components/user') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.user') }}">User</a>
                    </li>
                    <li class="{{ Request::is('components/wizard') ? 'active' : '' }}"><a
                            class="nav-link beep beep-sidebar" href="{{ route('components.wizard') }}">Wizard</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ $menu == 'forms' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                    <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('components/advanced-form') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('components.advanced-form') }}">Advanced Form</a>
                    </li>
                    <li class="{{ Request::is('forms/editor') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('forms.editor') }}">Editor</a>
                    </li>
                    <li class="{{ Request::is('forms/validation') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('forms.validation') }}">Validation</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ $menu == 'gmaps' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i>
                    <span>Google Maps</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('gmaps/advanced-route') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.advanced-route') }}">Advanced Route</a>
                    </li>
                    <li class="{{ Request::is('gmaps/draggable-marker') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.draggable-marker') }}">Draggable Marker</a>
                    </li>
                    <li class="{{ Request::is('gmaps/geocoding') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.geocoding') }}">Geocoding</a>
                    </li>
                    <li class="{{ Request::is('gmaps/geolocation') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.geolocation') }}">Geolocation</a>
                    </li>
                    <li class="{{ Request::is('gmaps/marker') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.marker') }}">Marker</a>
                    </li>
                    <li class="{{ Request::is('gmaps/multiple-marker') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.multiple-marker') }}">Multiple Marker</a>
                    </li>
                    <li class="{{ Request::is('gmaps/route') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.route') }}">Route</a>
                    </li>
                    <li class="{{ Request::is('gmaps/simple') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('gmaps.simple') }}">Simple</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                    <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                    <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                    <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                    <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                    <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                    <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                    <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                    <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                    <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                    <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                    <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                    <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                </ul>
            </li>

            <li class="menu-header">Pages</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                    <span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-reset-password.html">Reset Password</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i>
                    <span>Errors</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="errors-503.html">503</a></li>
                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ $menu == 'features' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i>
                    <span>Features</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('feature/activities') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('feature.activites') }}">Activities</a></li>
                    <li class="{{ Request::is('feature/post-create') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('feature.post-create') }}">Post Create</a></li>
                    <li class="{{ Request::is('feature/posts') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('feature.posts') }}">Posts</a></li>
                    <li class="{{ Request::is('feature/profile') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('feature.profile') }}">Profile</a></li>
                    <li class="{{ Request::is('feature/settings') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('feature.settings') }}">Settings</a></li>
                    <li class="{{ Request::is('feature/setting-detail') }}"><a class="nav-link"
                            href="{{ route('feature.setting-detail') }}">Setting Detail</a></li>
                    <li class="{{ Request::is('feature/tickets') }}"><a class="nav-link"
                            href="{{ route('feature.tickets') }}">Tickets</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Contact</a></li>
                    <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i>
                    <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
