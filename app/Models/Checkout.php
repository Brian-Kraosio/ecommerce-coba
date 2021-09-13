<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory, UuidIndex;

    public function item(){
        return $this->hasMany(CheckoutItem::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }
}
