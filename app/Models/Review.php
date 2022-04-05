<?php

namespace App\Models;

use App\Casts\Review\EmailCast;
use App\Values\Email;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property Email $email
 * @property string $text
 * @property Carbon $created_at
 * @property Carbon $updated_at
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
