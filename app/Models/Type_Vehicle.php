<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'value',
    ];

    public function vehicles(): HasMany {
        return $this->hasMany(Vehicle::class, 'type_vehicle_id');
    }
}
