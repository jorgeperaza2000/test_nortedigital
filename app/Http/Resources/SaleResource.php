<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
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
            'id' => $this->id,
            'client' => new ClientResource($this->client),
            'detail' => DetailResource::collection($this->details),
            'total' => number_format(DetailResource::collection($this->details)->sum('sub_total'), 2, '.', '')
        ];
    }
}
