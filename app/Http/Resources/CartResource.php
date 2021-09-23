<?php

namespace App\Http\Resources;

use App\Models\Cart;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

//        return dd($this);
        return [
            'id' => $this['id'],
            'user' => UserResource::make($this->whenLoaded('user')),
            'cart_item' => CartItemResource::collection($this->whenLoaded('item')) ,
            'total' => $this['total']->sum()
        ];
    }
}
