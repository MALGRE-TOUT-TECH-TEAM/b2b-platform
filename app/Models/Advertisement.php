<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;

    // controls what data can be filled in the database. 
    protected $fillable = [
        "title",
        "start_date",
        "end_date",
        "type",
        "url",
        "status"
    ];
}
