<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Company extends Model
{
    protected $fillable = "company_tbl";
    protected $table = array("name", "product_id");

    public function product()
    {
        return $this->belongsToMany(Product::class, "product_id");
    }
}
