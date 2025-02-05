@extends('layouts.app')

@section('content')



<div class="stationList">
    <h1>ESTACIONES</h1>
    @foreach ($stations as $station)
        <div class="stationItem">
            <p><strong>Nombre:</strong> {{ $station->name }}</p>
            <p><strong>Ciudad:</strong> {{ $station->city }}</p>
            <p><strong>Total recaudado:</strong> {{ $station->total_toll_collected }} €</p>
            <a href="{{ route('stationShow', $station->id) }}" class="detailsButton">Detalles</a>
        </div>
    @endforeach
</div>




@endsection