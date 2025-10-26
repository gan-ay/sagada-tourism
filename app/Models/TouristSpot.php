<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    use HasFactory;

    protected $table = 'tourist_spots';
    protected $primaryKey = 'spot_id';
    protected $fillable = [
        'spot_name',
        'location',
        'description',
        'opening_hours',
        'contact_info',
    ];
}
