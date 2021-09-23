<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this['id'],
            'product' => ProductResource::make($this->whenLoaded('product')),
            'cart_id' => $this['cart_id'],
            'item_quantity' => $this['item_quantity'],
        ];
    }
}
