<?php

namespace App\Models;

use App\Traits\UuidIndex;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, UuidIndex;

    protected $fillable = [
        'name' , 'shop_id', 'type_id', 'availability', 'price' , 'quantity', 'views', 'discount', 'discount_price', 'status'
    ];

    protected $casts = [
        'availability' => 'boolean',
        'discount' => 'boolean'
    ];



    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function checkouts(){
        return $this->hasMany(CheckoutItem::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model){
            $slug = Str::slug($model['name']);
            $allSlugs = self::where('slug', 'like', $slug . '%')->get('slug');
            if (!$allSlugs->contains('slug', $slug)){
                $model['slug'] = $slug;
            } else{
//                for ($i = 1; $i<=10; $i++){
//                    $newSlug = $slug . '-' . $i;
//                    if (!$allSlugs->contains('slug', $newSlug)){
//                        $model['slug']=$newSlug;
//                    }
//                }
                $newSlug = $slug . '-' . $model->shop['name'];
                $model['slug'] = $newSlug;
            }
        });
    }
}
