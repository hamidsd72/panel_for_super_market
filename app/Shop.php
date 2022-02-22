<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'user_id','shop_name','owner_first_name','owner_last_name','address'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
