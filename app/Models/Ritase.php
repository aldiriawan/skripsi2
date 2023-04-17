<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ritase extends Model
{
    use HasFactory;

    public $table = "ao_ritase";

    protected $guarded = [
        'id',
    ];

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
