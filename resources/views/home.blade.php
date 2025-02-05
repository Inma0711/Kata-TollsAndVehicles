@extends('layouts.app')

@section('content')
    <div class="containerHome">

        <a href="{{ route('stationHome') }}" class="buttonTollStations">
            <img src="{{ asset('img/icons/tollIcon.png') }}" alt="Toll icon" />
        </a>


        <a href="{{ route('vehicleHome') }}" class="buttonVehicles">
            <img src="{{ asset('img/icons/vehiclesIcon.png') }}" alt="Vehicles Icon" />
        </a>

    </div>
@endsection
