<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable3 = [
        'id',
        'h2',
        'p',
        'quotelink1',
        'quotetext1',
        'quotelogo1',
        'quotelink2',
        'quotetext2',
        'quotelogo2',
        'image'];
}
