<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'genre',
        'duration',
        'poster',
        'release_date'
    ];
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
