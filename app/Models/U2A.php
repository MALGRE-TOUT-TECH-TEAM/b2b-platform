<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class U2A extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;
    protected $table = "user_audience_maps";
    protected $fillable = [
        "user_id",
        "audience_id",
    ];
}
