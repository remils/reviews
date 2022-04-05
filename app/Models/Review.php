<?php

namespace App\Models;

use App\Casts\Review\EmailCast;
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

    protected $casts = [
        'email' => EmailCast::class
    ];
}
