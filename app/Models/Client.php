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

    /**
     * Get the user that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    /**
     * Get the countrie that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function countrie(): BelongsTo
    {
        return $this->belongsTo(Countrie::class, 'id', 'countrie_id');
    }

    /**
     * Get the currency that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'id', 'currency_id');
    }

    /**
     * Get the payment that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class, 'id', 'payment_id');
    }
    
}
