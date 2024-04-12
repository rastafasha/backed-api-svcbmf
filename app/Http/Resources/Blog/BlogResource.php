<?php

namespace App\Http\Resources\Blog;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            "id" =>$this->resource->id,
            "user_id" =>$this->resource->user_id,
            'title' =>$this->resource->title,
            'description' =>$this->resource->description,
            'short_desc' =>$this->resource->short_desc,
            // 'author' =>$this->resource->author,
            "author"=>$this->resource->author ? [
                "id"=>$this->resource->author->id,
                "full_name"=>$this->resource->author->full_name,
            ]:NULL,
            'is_active' =>$this->resource->is_active,
            // "image"=> $this->resource->image ? env("APP_URL")."storage/".$this->resource->image : null,
            "image"=> $this->resource->image ? env("APP_URL").$this->resource->image : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}