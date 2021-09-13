<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory, UuidIndex;

    public function method(){
        return $this->belongsTo(ShippingMethod::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function checkout(){
        return $this->hasMany(Checkout::class);
    }
}
