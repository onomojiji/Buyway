<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "code",
        "indicatif",
        "langue",
        "devise",
        "drapeau",
        "active"
    ];

    protected $hidden = [
        "active"
    ];

    protected $casts = [
        "active" => "boolean"
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function numeroPaiments()
    {
        return $this->hasMany(NumeroPaiment::class);
    }
}
