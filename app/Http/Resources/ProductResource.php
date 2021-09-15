<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'category_id' => $this['category_id'],
            'shop_id' => $this['shop_id'],
            'slug' => $this['slug'],
            'name' => $this['name'],
            'price' => $this['price'],
            'discount' => $this['discount'],
            'discount_price' => $this['discount_price'],
            'status' => $this['status'],
            'created_at' => $this['created_at']
        ];
    }
}
