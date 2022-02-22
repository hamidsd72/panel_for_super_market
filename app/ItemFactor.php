<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemFactor extends Model
{
    protected $fillable = [
        'factor_id','product_id','quantity','price_per','product_name'
    ];
    public function factor(){
        return $this->belongsTo(Factor::class);
    }
}
