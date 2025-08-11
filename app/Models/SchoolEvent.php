<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolEvent extends Model
{
    protected $table='school_events';
    protected $fillable=['title','name','image'];
}
