<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $fillable = [
        'product_id','image_product'
    ];
    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
