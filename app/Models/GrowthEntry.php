<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowthEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'entry_date',
        'height',
        'leaf_count',
        'notes',
        'image_url'
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}