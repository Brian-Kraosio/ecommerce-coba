<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory, UuidIndex;

    protected $table = 'carts';

    public function userCart(){
        return $this->belongsTo(User::class);
    }
}
