<?php

namespace App\Http\Resources\Fotoceo;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FotoceoResource extends JsonResource
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
            'periodo' =>$this->resource->periodo,
            'titulo' =>$this->resource->titulo,
            // "image"=> $this->resource->image ? env("APP_URL")."storage/".$this->resource->image : null,
            "image"=> $this->resource->image ? env("APP_URL").$this->resource->image : null,
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}