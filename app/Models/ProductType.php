<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory, UuidIndex;

    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->hasMany(Product::class, 'type_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
