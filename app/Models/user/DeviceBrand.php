<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'description',
        'short_description',
        'published',
    ];
}
