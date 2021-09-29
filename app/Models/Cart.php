<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory, UuidIndex;

    protected $table = 'carts';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->hasMany(CartItem::class);
    }

    protected function getTotalAttribute(){
        return $this->items->map(function (CartItem $item) {
            return $item['item_quantity'] * $item->product['price'];
        });
    }
}
