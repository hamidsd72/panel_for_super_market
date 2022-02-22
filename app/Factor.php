<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $fillable = [
        'user_id','payment_status','payment_method','status','total_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function itemfactors()
    {
        return $this->hasMany(ItemFactor::class);
    }
}
