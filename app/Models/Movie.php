<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['image', 'title', 'original_title', 'description', 'genre'];
}
