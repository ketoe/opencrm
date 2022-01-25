<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "nip",
        "regon",
        "krs",
        "address",
        "telephone",
        "email",
        "countrie_id",
        "currency_id",
        "user_id",
        "payment_id"
    ];
}
