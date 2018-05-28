<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Projects extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
            'type' => 'projects',
            'id' => (string)$this->id,
                'attributes'=>[
                'name' => $this->name
                ]
            ];
    }
}
