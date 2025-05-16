<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'species',
        'description',
        'planting_date'
    ];

    // Связи
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function growthEntries()
    {
        return $this->hasMany(GrowthEntry::class);
    }

    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}