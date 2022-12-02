<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $primayKey = 'domain';
    protected $fillable = [
        'domain',
        'user_id',
        'picture',
        'name',
        'status',
    ];

    
}
