<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'animated_texts',
        'description',
        'image',

    ];

    protected $casts = [
        'animated_texts' => 'array',
    ];
}
