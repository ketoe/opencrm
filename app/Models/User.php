<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'surname'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the notes for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class, 'id', 'user_id');
    }

    /**
     * Get all of the clients for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'id', 'user_id');
    }

    /**
     * Get all of the calenders for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calenders(): HasMany
    {
        return $this->hasMany(Calender::class, 'id', 'user_id');
    }

    /**
     * Get all of the orders for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id', 'user_id');
    }

    /**
     * Get all of the messages for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messagesSend(): HasMany
    {
        return $this->hasMany(Message::class, 'id', 'user_id');
    }

    /**
     * Get all of the messagesTo for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messagesTo(): HasMany
    {
        return $this->hasMany(Message::class, 'id', 'to');
    }

    /**
     * Get all of the notesclients for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notesclients(): HasMany
    {
        return $this->hasMany(NoteClient::class, 'id', 'user_id');
    }
    
}
