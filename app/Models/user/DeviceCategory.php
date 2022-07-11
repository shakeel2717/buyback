<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'picture',
        'icon',
        'description',
        'short_description',
        'published',
    ];
}
