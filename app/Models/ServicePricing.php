<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePricing extends Model
{
    use HasFactory;



    protected $table = 'service_pricings'; 


    protected $fillable = [
        'name',
        'slug',
        'price',
        'duration',
        'description',
        'features',
        'is_featured',
        'order',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'status',
        'posted_at',
        'remove_at'
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean',
        'seo_keywords' => 'array',
    ];


}
