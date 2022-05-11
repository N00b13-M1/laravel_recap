<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable= [
        'poster_name_big',
        'date',
        'category',
        'rating',
        'quote',
        'headshot',
        'poster_name_small',
        'poster_title'
        ];
}
