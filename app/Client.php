<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
