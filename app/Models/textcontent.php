<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextContent extends Model
{
    protected $table = 'text_contents';
    protected $fillable = ['description', 'title'];
     protected $guarded = ['id'];
}
