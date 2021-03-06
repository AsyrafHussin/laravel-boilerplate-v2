<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerify extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'email_verifies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'token', 'created_at'];

    /**
     * The "boot" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(fn ($query) => $query->token = generateToken(20));
    }
}
