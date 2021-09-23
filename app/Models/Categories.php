<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends UuidModel
{
    use HasFactory;

    protected $fillable = [
        "eng_name",
        "dan_name",
        "status",
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_category_maps');
    }
}
