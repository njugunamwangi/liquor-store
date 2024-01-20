<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlavorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'flavor' => $this->flavor,
            'category' => $this->category,
            'brands' => BrandResource::collection($this->brands),
            'image' => $this->featuredImage,
        ];
    }
}
