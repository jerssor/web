<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}} " class="{{request()->routeIs('home')? 'active' : ''}}" style="font-family: 'Dancing Script', cursive; font-size: 30px;">La Candelaria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hospedaje.index') }} " class="{{ request()->routeIs('home') ? 'active' : '' }}">Hospedajes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gastro.html">Gastronomía</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Planes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Actividades</a>
                    <a class="dropdown-item" href="#">Cultura</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="{{ route('contacto.index') }}" class="{{ request()->routeIs('contacto.index') ? 'active' : '' }}">Contacto</a>
            </li>
        </ul>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ES
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">EN</button>
              <button class="dropdown-item" type="button">BZ</button>
              <button class="dropdown-item" type="button">FR</button>
            </div>
          </div>
    </div>
</nav>