<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;
    protected $table = "calenders";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "description",
        "user_id",
        "date_start",
        "date_end",
        "archive",
        "important"
    ];

    /**
     * Get the user that owns the Calender
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
