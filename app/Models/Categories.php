<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Categories extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "eng_name",
        "dan_name",
        "status",
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_category_maps');    
    }
}
