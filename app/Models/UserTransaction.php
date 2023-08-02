<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "transaction_id",
        "numero_paiment_id",
        "montant",
        "reference",
        "status",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function numero_paiment()
    {
        return $this->belongsTo(NumeroPaiment::class);
    }

    public function getStatusAttribute($value)
    {
        return $value == 1 ? "success" : "error";
    }

    public function getMontantAttribute($value)
    {
        return number_format($value) . " USD";
    }

}
