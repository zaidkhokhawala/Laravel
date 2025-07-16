<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; // because we did not use timestamps
    protected $fillable = ['cat_name'];
}
