<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'main_logo', 'alt_logo', 'description', 'p_iva', 'address'];
    
}
