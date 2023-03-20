<nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white fs-3" href="#">Pizzeria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white fs-5" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fs-5" href="#">Link</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto, guest
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a></li>
              <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </li>
          @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>