<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $table = "currencies";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "shortName",
        "value"
    ];

    /**
     * Get all of the clients for the Currency
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'id', 'currency_id');
    }

    /**
     * Get all of the orders for the Currency
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id', 'currency_id');
    }
}
