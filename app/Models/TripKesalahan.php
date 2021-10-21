<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripKesalahan extends Model
{
    use HasFactory;

    public $table = "ao_trip_kesalahan";

    protected $guarded = [
        'id',
    ];

    public function ao_trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
