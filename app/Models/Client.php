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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the countrie that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function countrie()
    {
        return $this->belongsTo(Countrie::class, 'countrie_id', 'id');
    }

    /**
     * Get the currency that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }

    /**
     * Get the payment that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    /**
     * Get all of the notesClients for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notesClients(): HasMany
    {
        return $this->hasMany(NoteClient::class, 'id', 'client_id');
    }
    
}
