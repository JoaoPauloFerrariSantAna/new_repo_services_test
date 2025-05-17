<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = "product_tbl";
    protected $table = array("name", "price", "quantity");
}
