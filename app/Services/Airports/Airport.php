<?php

namespace App\Services\Airports;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iata', 'iso', 'status', 'name', 'continent', 'type', 'lat', 'lon', 'size'
    ];
}
