<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codriver extends Model
{
    use HasFactory;

    public $table = "ao_codriver";

    protected $guarded = [
        'id',
    ];

    public function getRouteKeyName()
    {
        return 'nik_codriver';
    }

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
