<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $fillable = [
        'product_id','options', 'value'
    ];
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
