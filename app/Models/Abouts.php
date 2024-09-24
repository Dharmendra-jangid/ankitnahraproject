<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'qualification',
        'workexperience',
        'email',
        'phone',
        'description',
        'short_description',
        'address',
        'consultationtiming',
        'image',
    ];
}
