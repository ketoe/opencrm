<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name"
    ];

    /**
     * Get all of the comments for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    /**
     * Get all of the clients for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'id', 'payment_id');
    }

    /**
     * Get all of the orders for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id', 'payment_id');
    }
    
}
