@extends('layouts.app')

@section('content')
    <div class="containerMain">
        <div class="containerTitle">
            <div class="stationAtribute">
                <p class="title">Vehículo:</p>
                <p>{{ $vehicle->type->type}}</p>
            </div>
            <div class="stationAtribute">
                <p class="title">Matrícula:</p>
                <p>{{ $vehicle->plate }}</p>
            </div>
            <div class="stationAtribute">
                
                <p class="title">Número de ejes:</p>
                <p>{{ $vehicle->axles ? $vehicle->axles : 0 }}</p>
            </div>
        </div>
        <div class="objectList">
            <h1>PEAJES PASADOS</h1>
        </div>

        
       <div class="objectList">
        @foreach ($vehicle->tolls as $toll)
        <div class="item">
            <p><strong>Estación: </strong>{{ ucfirst($toll->station->name) }}</p>
            <p><strong>Lugar: </strong> {{ ucfirst($toll->station->city) }}</p>
            <p><strong>Total recolectado: </strong> {{ $toll->toll_total_collected }}€</p>

            <a href="{{ route('stationShow', $toll->vehicle->id) }}" class="detailsButton">Detalles</a>
    </div>
    @endforeach

</div>

@endsection
</div>
