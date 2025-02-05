<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle_Toll_Station extends Model
{
    use HasFactory;

    protected $table = 'stations_vehicles';

    protected $fillable = [
        'toll_station_id',
        'vehicle_id',
        'toll_value',
    ];

    public function station(): BelongsTo {
        return $this->belongsTo(Toll_station::class, 'toll_station_id');
    }

    public function vehicle(): BelongsTo {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
