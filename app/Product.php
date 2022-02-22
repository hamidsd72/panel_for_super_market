<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id','sku','product_name','description','amount','off_amount','availability','product_count'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function imageProducts()
    {
        return $this->hasMany(ImageProduct::class);
    }
    
    public function productOptions()
    {
        return $this->hasMany(ProductOption::class);
    }
}
