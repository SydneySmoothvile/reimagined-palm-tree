<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_manager', 'location_p',
        'landlord', 'location_l',
        'tenant', 'location_t'
    ];
}
