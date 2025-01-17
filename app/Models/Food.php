<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'taste_rating', 'portion_rating'];
}
