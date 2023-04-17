<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    public $table = "ao_rute";

    protected $guarded = [
        'id',
    ];

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
