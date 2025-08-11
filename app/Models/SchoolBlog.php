<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolBlog extends Model
{
    protected $table = "schoolblogs";
    protected $fillable = ['title', 'description', 'image'];
     protected $guarded = ['id'];
}
