<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'user' => UserResource::make($this->whenLoaded('user')),
            'rating' => $this['rating'],
            'description' => $this['description'],
            'created_at' => $this['created_at']
        ];
    }
}
