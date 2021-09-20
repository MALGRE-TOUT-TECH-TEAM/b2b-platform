<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class U2A extends Model
{
    public $timestamps = false;
    protected $table = "user_audience_maps";
    protected $fillable = [
        "user_id",
        "audience_id",
    ];
}
