<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
    'user_id',
    'movie_id',
    'seats',
    'total_ticket',
    'total_price',
    'payment_method',
    'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
