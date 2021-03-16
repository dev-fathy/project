<div class="logo">
    <a href="#">
        <img src="{{ asset('temp/images/icon/logo-white.png') }}" alt="Cool Admin" />
    </a>
</div>
<div class="menu-sidebar2__content js-scrollbar1">
    <div class="account2">
        <div class="image img-cir img-120">
            <img src="{{ asset('temp/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
        </div>
        <h4 class="name">john doe</h4>



        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Sign out') }}</a>

    </div>
    <nav class="navbar-sidebar2">
        <ul class="list-unstyled navbar__list">
            <li class="active has-sub">
                <a class="js-arrow" href="#" target="_self">
                    <i class="fas fa-tachometer-alt"></i>Dashboard
                </a>

            </li>

                        <li>
                <a href="{{ url('/members') }}">
                    <i class="fas fa-user"></i>Members</a>
            </li>

            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-shopping-basket"></i>Pages
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ url('sales') }}">
                            <i class="fas fa-shopping-basket"></i>Sales</a>
                    </li>
                    <li>
                        <a href="{{ url('config') }}">
                            <i class="far fa-check-square"></i>Configuration & Settings</a>
                    </li>
                </ul>
            </li>



        </ul>
    </nav>
</div>