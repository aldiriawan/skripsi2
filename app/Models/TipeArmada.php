<?php

namespace App\Models;

use App\Models\Armada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipeArmada extends Model
{
    use HasFactory;

    public $table = "ao_tipe_armada";

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'tipe_armada', 'kapasitas'
    ];

    public function ao_armadas()
    {
        return $this->hasMany(Armada::class);
    }
}
