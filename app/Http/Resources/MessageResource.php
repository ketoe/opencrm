<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class MessageResource extends JsonResource
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
           'id' => $this->id,
           'name' => $this->name,
           'description' => $this->description,
           'user' => new UserResource(User::findOrFail($this->user_id)),
           'to' => new UserResource(User::findOrFail($this->to)),
           'archive' => $this->archive,
           'important' => $this->important,
           'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
       ];
    }
}
