
<div class="header">

    <div class="header-left">
    <a href="" class="logo">
    <img src="{{asset('img/logo.png')}}" alt="Logo">
    </a>
    <a href="index.html" class="logo logo-small">
    <img src="{{asset('img/logo-small.png')}}" alt="Logo" width="30" height="30">
    </a>
    </div>

    <a href="javascript:void(0);" id="toggle_btn">
    <i class="fe fe-text-align-left"></i>
    </a>


    <a class="mobile_btn" id="mobile_btn">
    <i class="fa fa-bars"></i>
    </a>


    <ul class="nav user-menu">




    <li class="nav-item dropdown has-arrow">
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
    <span class="user-img"><img class="rounded-circle" src="{{asset('img/profiles/avatar-01.jpg')}}" width="31" alt="Jassa"></span>
    </a>
    <div class="dropdown-menu">
    <div class="user-header">
    <div class="avatar avatar-sm">
    <img src="{{asset('img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
    </div>
    <div class="user-text">
    <h6>{{ Auth::user()->name }}</h6>
    <p class="text-muted mb-0">Administrator</p>
    </div>
    </div>

    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</div>
@endguest
    </li>

    </ul>

    </div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    <ul>
    <li class="menu-title">
    </li>
    <li class="active">
    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
    </li>
    <li class="submenu">
    <a href="#"><i class="fe fe-table"></i> <span> Data <span class="menu-arrow"></span></span></a>
    <ul style="display: none;">

    <li><a href="{{ route('parcel') }}">Parcel Data</a></li>
    <li><a href="{{ route('adresse') }}">Adresses Data</a></li>
    <li><a href="{{ route('shipping') }}">méthodes d’expédition</a></li>
    </ul>
    </li>

    </ul>
    </div>
    </div>
    </div>

