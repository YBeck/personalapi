<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Employment extends JsonResource
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
        'type' => 'employment',
        'id' => (string)$this->id,
            'attributes'=>[
                'name' => $this->name,
                'location' => [
                    'address' => $this->address,
                    'city' => $this->city,
                    'state' => $this->state,
                    'zip' => $this->zip
                ],
                'description' => $this->description,
                'date_started' => $this->date_started,
                'date_ended' => $this->date_ended
            ]
        ];
    }
}
