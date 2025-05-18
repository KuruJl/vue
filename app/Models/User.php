<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function isAdmin()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }
}
