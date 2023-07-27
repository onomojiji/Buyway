<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "nom",
    ];

    public function user_transactions()
    {
        return $this->hasMany(UserTransaction::class);
    }

}
