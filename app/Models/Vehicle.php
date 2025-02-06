<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'axles',
        'type_vehicle_id'
    ];

    public function type(): BelongsTo {
        return $this->belongsTo(Type_Vehicle::class, 'type_vehicle_id');
    }

    public function toll(): HasMany {
        return $this->hasMany(Vehicle_Toll_Station::class, 'vehicle_id');
    }
}
