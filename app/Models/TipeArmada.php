<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeArmada extends Model
{
    use HasFactory;

    public $table = "ao_tipe_armada";

    protected $guarded = [
        'id_tipe_armada',
    ];

    public function ao_armadas()
    {
        return $this->hasMany(Armada::class);
    }
}
