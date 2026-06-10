<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
        'movie_id',
        'show_date',
        'show_time',
        'price'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
