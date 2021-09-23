<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Http\FormRequest;

class U2C extends UuidModel
{

    public $timestamps = false;
    protected $table = "user_category_maps";
    protected $fillable = [
        "user_id",
        "category_id",
    ];
}
