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
        return $this->belongsTo(Armada::class);
    }

    public function ao_driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function ao_codriver()
    {
        return $this->belongsTo(CoDriver::class);
    }

    public function ao_trip_kesalahans()
    {
        return $this->hasMany(TripKesalahan::class);
    }
}
