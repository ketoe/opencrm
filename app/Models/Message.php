<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = "messages";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "description",
        "user_id",
        "to",
        "archive",
        "important",
        "read"
    ];

    /**
     * Get the user that owns the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userSend(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    /**
     * Get the userTo that owns the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'to');
    }
}
