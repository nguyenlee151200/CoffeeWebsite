<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oders_detail extends Model
{
    protected $table = "orders_detail";
    public function products()
    {
        return $this->belongsTo("App\Product",'pro_id');
    }
}
