<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumeroPaiment extends Model
{
    use HasFactory;

    protected $fillable = [
        "icon",
        "nom",
        "numero",
        "pays_id",
    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
