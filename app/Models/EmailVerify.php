<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerify extends Model
{
    protected $table = 'email_verifies';

    protected $fillable = [
        'email', 'token', 'created_at',
    ];

    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->token = generateToken(20);
        });
    }
}
