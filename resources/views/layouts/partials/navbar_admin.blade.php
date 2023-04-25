<nav class="navbar navbar-expand-lg navbar-light bg-dark ml-auto">
    <h1 class="logo me-auto {{ request()->is('/') ? 'active': ''}}"><a href="{{ route('home')}}">Great Company</a></h1>
    <div class="container-fluid">
      <nav id="navbar" class="navbar">
        
          <li class="nav-link scrollto">
            <a href="#">Acceuil</a>
          </li>
          <li class="nav-link scrollto">
            <a href="#">Offres</a>
          </li>
          <li class="breadcrumb-item ">
            <a href="#">Data</a>
          </li>
        
      </nav>
    </div>
  </nav>