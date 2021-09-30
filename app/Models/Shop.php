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
        'user_id', 'name' , 'address', 'photo', 'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function shippings(){
        return $this->hasMany(Shipping::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model){
            $slug = Str::slug($model['name']);
            $model['domain'] = $slug;
//            $allSlugs = self::where('slug', 'like', $slug . '%')->get('slug');
//            if (!$allSlugs->contains('slug', $slug)){
//                $model['slug'] = $slug;
//            } else{
//                for ($i = 1; $i<=10; $i++){
//                    $newSlug = $slug . '-' . $i;
//                    if (!$allSlugs->contains('slug', $newSlug)){
//                        $model['slug']=$newSlug;
//                    }
//                }
//                $newSlug = $slug . '-' . $model->shop['name'];
//                $model['slug'] = $newSlug;
//            }
        });
    }
}
