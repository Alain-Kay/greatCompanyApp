<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto {{ request()->is('/') ? 'active': ''}}"><a href="{{ route('home')}}">Great Company</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home')}}" class="nav-link scrollto  {{ request()->is('/') ? 'active': ''}}">Acceuil</a></li>
          <li><a href="{{ route('A-propos')}}" class="nav-link scrollto {{ request()->is('A-propos') ? 'active': ''}}" >Apropos</a></li>
          <li><a href="{{ route('Nos-services')}}" class="nav-link scrollto {{ request()->is('Nos-services') ? 'active': ''}}" >Services</a></li>
          <li><a href="{{ route('Offres-demplois')}}" class="nav-link scrollto {{ request()->is('Offres-demplois') ? 'active': ''}}" >Offres d'emplois</a></li>
          <li><a href="{{ route('Contact')}}" class="nav-link scrollto {{ request()->is('Contact') ? 'active': ''}}" >Contact</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->