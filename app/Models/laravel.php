<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laravel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'done',
    ];
}
