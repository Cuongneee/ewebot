<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'email',
        'phone',
        'website',
        'message',
    ];

    public function service()
    {
        return $this->belongsTo(ServicePricing::class);
    }

}