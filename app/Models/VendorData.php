<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorData extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'services', 'lower_price', 'upper_price', 'description', 'duration', 'material', 'image'
    ];
}
