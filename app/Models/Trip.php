<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public $table = "ao_trip";

    protected $guarded = [
        'id',
    ];

    public function ao_armada()
    {
        return $this->belongsTo(Armada::class, 'id_armada');
    }

    public function ao_rute()
    {
        return $this->belongsTo(Rute::class, 'id_rute');
    }

    public function ao_ritase()
    {
        return $this->belongsTo(Ritase::class, 'id_ritase');
    }

    public function ao_driver()
    {
        return $this->belongsTo(Driver::class, 'id_driver');
    }

    public function ao_codriver()
    {
        return $this->belongsTo(CoDriver::class, 'id_codriver');
    }

    public function ao_trip_kesalahans()
    {
        return $this->hasMany(TripKesalahan::class, 'id_trip_kesalahan');
    }
}
