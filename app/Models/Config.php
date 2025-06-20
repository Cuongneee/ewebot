<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';
    protected $guarded = [];
    public $timestamps = true;

    protected $casts = [

        'seo_keywords' => 'array'
    ];
}
