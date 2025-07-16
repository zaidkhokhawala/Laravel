<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; // disable created_at and updated_at

    // allow these fields to be mass assignable
    protected $fillable = ['name', 'image', 'price', 'cat_id'];
}
