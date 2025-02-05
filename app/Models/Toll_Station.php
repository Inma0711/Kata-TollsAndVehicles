<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toll_Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'total_toll_collected',
    ];

      public function tolls(): HasMany {
        return $this->hasMany(Vehicle_Toll_Station::class, 'toll_station_id');
    }
}
