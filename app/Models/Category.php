<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasOne(Product::class);
    }

    public function type(){
        return $this->hasOne(ProductType::class);
    }
}
