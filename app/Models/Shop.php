<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory, UuidIndex;

    protected $fillable = [
        'user_id', 'name' , 'address', 'photo', 'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
