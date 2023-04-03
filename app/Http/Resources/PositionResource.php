<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PositionResource extends JsonResource
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
          "id"                  =>  $this->id,
          "title"               =>  $this->title,
          "grade"               =>  $this->grade,
          "state"               =>  $this->state,
          "usersCount"          =>  $this->users->count(),
//          "approvalStages"      =>  json_decode($this->approvalStages),
        ];
    }
}
