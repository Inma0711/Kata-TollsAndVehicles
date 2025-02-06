@extends('layouts.app')

@section('content')



<div class="objectList">
    <h1>VEHICULOS</h1>
    @foreach ($vehicles as $vehicle)
        <div class="item">
            <p><strong>Vehiculo:</strong> {{ $vehicle->type->type }}</p>
            <p><strong>Placa:</strong> {{ $vehicle->plate }}</p>
            <p><strong>Numero de ejes:</strong> {{ $vehicle->axles ? $vehicle->axles : 0 }}</p>
            <a href="{{ route('stationShow', $vehicle->id) }}" class="detailsButton">Detalles</a>
        </div>
    @endforeach
</div>




@endsection