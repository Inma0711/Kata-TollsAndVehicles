<header>
    <nav>
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/icons/logoWeb.png') }}" alt="Web logo" />
            </a>
        </div>
        <h1 >Toll Station</h1>
        <div class="links">
            <a href="{{ route('stationList') }}">Estaciones</a>
            <a href="{{ route('vehicleList') }}">Vehiculos</a>
        </div>
    </nav>
</header>