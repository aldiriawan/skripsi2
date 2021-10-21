<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public $table = "ao_driver";

    protected $guarded = [
        'id',
    ];

    public function getRouteKeyName()
    {
        return 'nik_driver';
    }

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
