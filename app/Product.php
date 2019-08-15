<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
