<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function sale()
    {
        return $this->hasOne(Sale::class, 'id', 'sale_id');
    }
}
