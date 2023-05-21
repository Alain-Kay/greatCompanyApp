<nav class="navbar navbar-expand-lg navbar-light bg-dark ml-auto"> 
    <div class="container-fluid">
      <nav id="navbar" class="navbar">
        
          <li class="nav-link scrollto">
            <a href="{{ request()->is('/') ? 'active': ''}}"><a href="{{ route('home')}}">Acceuil</a>
          </li>
          <li class="nav-link scrollto">
            <a href="{{ request()->is('Offres-demplois') ? 'active': ''}}"><a href="{{ route('Offres-demplois')}}">Offres</a>
          </li>
          <li class="nav-link scrollto mt-4">
            <a href="#">Data</a>
          </li>
        
      </nav>
    </div>
  </nav>