@extends('layouts.app')

@section('content')
    <div class="containerMain">
        <div class="containerTitle">
            <div class="stationAtribute">
                <p class="title">Nombre:</p>
                <p>{{ $station->name }}</p>
            </div>
            <div class="stationAtribute">
                <p class="title">Lugar:</p>
                <p>{{ $station->city }}</p>
            </div>
            <div class="stationAtribute">
                <p class="title">Recolectado:</p>
                <p>{{ $station->total_toll_collected }}</p>
            </div>
        </div>
        <div class="objectList">
            <h1>VEHÍCULOS PASADOS</h1>
        </div>


       <div class="objectList">
            @foreach ($station->tolls as $toll)
            <div class="item">
                <p><strong>Vehículo:</strong>{{ ucfirst($toll->vehicle->type->type) }}</p>

                <p><strong>Número de ejes:</strong> {{ $toll->vehicle->axles ? $toll->vehicle->axles : 0 }}</p>
                <p><strong>Dinero a pagar:</strong> {{ $toll->toll_value }}€</p>

                <a href="{{ route('vehicleShow', $toll->vehicle->id) }}" class="detailsButton">Detalles</a>
        </div>
        @endforeach

    </div>
@endsection
</div>
