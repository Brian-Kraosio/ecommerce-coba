<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, UuidIndex;

    public function product(){
        return $this->hasOne(Product::class);
    }

    public function type(){
        return $this->hasOne(ProductType::class);
    }
}
