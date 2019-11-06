<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $guarded = [];
    protected $table   = 'password_resets';

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