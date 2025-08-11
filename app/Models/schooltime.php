<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolTime extends Model
{
    protected $table = 'school_times';
    protected $fillable = ['title', 'day'];
}
