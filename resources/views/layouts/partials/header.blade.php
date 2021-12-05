<header>
    <h1>Zona Historica de Bogota</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }} "
                class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li><a href="{{ route('tipo_hospedaje.index') }}"
                class="{{ request()->routeIs('tipo_hospedaje.*') ? 'active' : '' }}">Tipos Hospedaje</a>
            </li>
            <li><a href="{{ route('hospedaje.index') }}"
                class="{{ request()->routeIs('hospedaje.*') ? 'active' : '' }}">Hospedajes</a>
            </li>
            <li><a href="{{ route('contacto.index') }}"
                class="{{ request()->routeIs('contacto.index') ? 'active' : '' }}">Contactanos</a>
            </li>

        </ul>
    </nav>
</header>