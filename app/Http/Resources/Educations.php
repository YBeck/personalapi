<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Educations extends JsonResource
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
            'type' => 'education',
            'id' => (string)$this->id,
                'attributes'=>[
                'name' => $this->name
                ]
            ];
    }
}
