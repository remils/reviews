<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $name
 * @property $email
 * @property $text
 */
class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'text'
    ];
}
