<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return
        [
            'id' => $this->id,
            'name ' => $this->name,
            'canceled_Requests' , $this->user()->cancelRequests()->first()->reqs_count,
            'updated_at' =>$this->updated_at->diffForhumans()

        ];    }
}
