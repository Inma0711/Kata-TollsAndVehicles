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


    <div class="cardSection container">
        @foreach ($station->tolls as $toll)
           
                <h5 class="card-title">{{ $toll->vehicle->plate }}</h5>
                       <!-- <p>{{ ucfirst($toll->vehicle->type->type) }}</p>-->
                    </div>
                    <p><strong>Num of axles:</strong> {{ $toll->vehicle->axles ? $toll->vehicle->axles : 0 }}</p>
                    <p><strong>Amount paid:</strong> {{ $toll->toll_value }}€</p>
                </div>
                <a href="{{ route('vehiclesShow', $toll->vehicle->id) }}" class="btn btn-details">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>


@endsection
