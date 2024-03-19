
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('generalindex')}}">
          <i class="bi bi-person"></i>
          <span>General</span>
        </a>
      </li><!-- End General Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('aboutindex')}}">
          <i class="bi bi-person"></i>
          <span>About</span>
        </a>
      </li><!-- End About Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('checfindex')}}">
          <i class="bi bi-person"></i>
          <span>Checf</span>
        </a>
      </li><!-- End checf Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('testimonialindex')}}">
          <i class="bi bi-person"></i>
          <span>Testimonial</span>
        </a>
      </li><!-- End checf Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('eventindex')}}">
          <i class="bi bi-person"></i>
          <span>Events</span>
        </a>
      </li><!-- End checf Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('galleryindex')}}">
          <i class="bi bi-person"></i>
          <span>Gallery</span>
        </a>
      </li><!-- End gallery Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('ratingindex')}}">
          <i class="bi bi-person"></i>
          <span>Rating</span>
        </a>
      </li><!-- End gallery Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('categorymenuindex')}}">
          <i class="bi bi-person"></i>
          <span>Category Menu</span>
        </a>
      </li><!-- End checf Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-question-circle"></i>
          <span>Employee</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('register') }}">
          <i class="bi bi-card-list"></i>
          <span>{{ __('Register') }}</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>{{ __('Login') }}</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

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

  </aside><!-- End Sidebar-->