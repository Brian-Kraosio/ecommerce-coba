<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory, UuidIndex;

    public function product(){
        $this->belongsTo(Product::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
