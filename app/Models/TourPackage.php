<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $primaryKey = 'tour_id';
    protected $fillable = ['tour_name', 'description', 'price', 'duration', 'spot_id'];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class, 'spot_id', 'spot_id');
    }
}
