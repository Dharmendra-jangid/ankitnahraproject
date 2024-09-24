<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEdit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'longdescription',
        'image',
        'slug',
    ];
}

