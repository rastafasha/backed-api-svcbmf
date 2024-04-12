<?php

namespace App\Http\Resources\Timeline;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TimelineCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "data"=> TimelineResource::collection($this->collection)
        ];
    }
}
