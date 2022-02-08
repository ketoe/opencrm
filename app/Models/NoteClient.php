<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteClient extends Model
{
    use HasFactory;
    protected $table = "notes_clients";
    protected $primaryKey = "id";
    protected $fillable = [
        "description",
        "important",
        'client_id',
        'user_id'
    ];


    /**
     * Get the user that owns the NoteClient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the client that owns the NoteClient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
