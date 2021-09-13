<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, UuidIndex;

    protected $fillable = [
        'name' , 'shop_id', 'type_id', 'slug', 'price' , 'quantity', 'views', 'discount', 'discount_price', 'status'
    ];

    protected $casts = [
        'status' => 'boolean',
        'discount' => 'boolean'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function checkout(){
        return $this->hasMany(CheckoutItem::class);
    }
}
