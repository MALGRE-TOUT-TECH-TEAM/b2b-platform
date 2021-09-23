<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $keyType = "string";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'surname',
        'email',
        'photo',
        "email_verified_at",
        'password',
        "birthdate",
        "remember_token",
        'telephone',
        'gender',
        "is_active",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'user_category_maps', 'category_id', 'user_id');
    }

    public function audiences()
    {
        return $this->belongsToMany(Audience::class, 'user_audience_maps', 'audience_id', 'user_id');
    }
}
