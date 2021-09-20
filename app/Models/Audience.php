<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    protected $fillable = [
        "eng_name",
        "dan_name",
        "status",
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_audience_maps');    
    }
}
