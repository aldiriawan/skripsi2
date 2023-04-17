<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\TipeArmada;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Armada extends Model
{
    use HasFactory;

    public $table = "ao_armada";

    protected $guarded = [
        'id',
    ];

    public function getRouteKeyName()
    {
        return 'kode_armada';
    }

    public function ao_tipe_armada()
    {
        return $this->belongsTo(TipeArmada::class, 'id_tipe_armada');
    }

    public function ao_trips()
    {
        return $this->hasMany(Trip::class);
    }
}
