<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Http\Models\Category;

class Product extends Model
{
    protected $fillable = "product_tbl";
    protected $table = array("name", "price", "quantity", "category_id");

    public function category()
    {
        return $this->hasMany(Category::class, "category_id");
    }

}
