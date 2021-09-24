<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audience extends UuidModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "eng_name",
        "dan_name",
        "status",
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_audience_maps');
    }
}
