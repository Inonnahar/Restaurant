  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{url('front/index.html')}}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{url('front/assets/img/logo.png')}}" alt=""> -->
        <h1>Yummy<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home')}}">Home</a></li>
          <li><a href="{{ route('about')}}">About</a></li>
         
          <li><a href="{{ route('counter')}}">Counter</a></li>
          <li><a href="{{ route('menu')}}">Menu</a></li>
          <li><a href="{{ route('testimonial')}}">testimonial</a></li>
          <li><a href="{{ route('event')}}">Event</a></li>
          <li><a href="{{ route('chefs')}}">Chefs</a></li>
          
         <li><a href="{{ route('gellary')}}">Gallery</a></li>
          
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a class="btn-book-a-table" href="{{ route('booktable')}}">Book a Table</a></li>
          <li><a href="">User</a>
            <ul>
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
                            <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-power-settings"></i>
                                <span>Logout</span>
                            </a> -->

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="mdi mdi-power-settings"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        </div>

                        @endguest
            </ul>
        </li>
        </ul>
      </nav><!-- .navbar -->

      <!-- <a class="btn-book-a-table" href="{{url('front/#book-a-table')}}">Book a Table</a> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->