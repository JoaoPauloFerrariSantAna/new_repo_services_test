<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Category extends Model
{
    protected $fillable = "category_tbl";
    protected $table = array("name", "product_id");

    public function product()
    {
        return $this->hasMany(Product::class, "product_id");
    }
}
