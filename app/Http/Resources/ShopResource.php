<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            'owner' => UserResource::make($this->whenLoaded('owner')),
            'name' => $this['name'],
            'domain' => $this['domain'],
            'address' => $this['address'],
            'photo' => $this['photo'],
            'shop_status' => $this['shop_status'],
        ];

    }
}
