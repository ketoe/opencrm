<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;
    protected $table = "countries";
    protected $primaryKey = "id";
    protected $fillable = [
        "name"
    ];

    /**
     * Get all of the clients for the Countrie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'id', 'countrie_id');
    }
}
