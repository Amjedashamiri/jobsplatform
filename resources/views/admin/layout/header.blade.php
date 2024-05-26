<nav class="main-header navbar navbar-expand navbar-dark bg-success elevation-1">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white " data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('contact') }}" class="nav-link text-white "><h6> Contact Us</h6></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto"> 
    <div class="container ">
        <img src="admin/images/logo2.png" class="rounded-pill elevation-3" height="58" width="700" alt="wazifati_logo"
          loading="lazy" />
    </div>
  </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link text-white font-weight-bold" data-widget="navbar-search" href="#" role="button">
          <i class=""></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <h4><i class=""></i></h4>
                </button>
                
              </div>
            </div>
          </form>
        </div>
      </li>
        <!-- Authentication Links -->
        @guest
           @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}"><h6>{{ __('Login') }}</h6></a>
                </li>
           @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-expanded="false">

              {{ Auth::user()->name }} 
          </a>
          <ul class="dropdown-menu dropdown-menu-end" >
             <li> <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                  @csrf
              </form>
            </ul>
      </li>
      
        @endguest
      <li class="nav-item">
        <a class="nav-link text-white " data-widget="fullscreen" href="#" role="button">
         <h4> <i class="fas fa-expand-arrows-alt"></i></h4>
        </a>
      </li>
    </ul>
  </nav>