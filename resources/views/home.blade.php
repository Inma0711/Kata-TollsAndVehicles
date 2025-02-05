@extends('layouts.app')

@section('content')
    <div class="containerHome">

        <a href="stations.home" class="buttonTollStations">
            <img src="{{ asset('img/icons/tollIcon.png') }}" alt="Toll icon" />
        </a>


        <a href="vehicles.home" class="buttonVehicles">
            <img src="{{ asset('img/icons/vehiclesIcon.png') }}" alt="Vehicles Icon" />
        </a>

    </div>
@endsection
