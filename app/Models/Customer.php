<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'company',
        'phone',
        'note',
    ];

    // belongsTo user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
