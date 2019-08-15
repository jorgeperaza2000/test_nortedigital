<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'sale_id', 'id');
    }
}
