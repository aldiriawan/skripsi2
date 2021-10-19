<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    public $table = "ao_armada";

    protected $guarded = [
        'id_armada',
    ];

    public function getRouteKeyName()
    {
        return 'kode_armada';
    }

    public function ao_tipe_armada()
    {
        return $this->belongsTo(TipeArmada::class);
    }

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
