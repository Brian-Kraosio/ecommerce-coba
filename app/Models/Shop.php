<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Shop extends Model
{
    use HasFactory, UuidIndex;

    protected $fillable = [
        'user_id', 'name' , 'address', 'photo', 'shop_status', 'domain'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model){
            $slug = Str::slug($model['name']);
            $model['domain'] = $slug;
        });
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function shippings(){
        return $this->hasMany(Shipping::class);
    }


}
