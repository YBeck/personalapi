<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Education extends JsonResource
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
                'name' => $this->name,
                'location' => [
                    'address' => $this->address,
                    'city' => $this->city,
                    'state' => $this->state,
                    'zip' => $this->zip
                ],
                'total_semesters' => $this->total_semesters,
                'semesters_per_year' => $this->semesters_per_year,
                'degree' => $this->degree,
                'total_semesters' => $this->total_semesters,
                'date_started' => $this->date_started,
                'date_ended' => $this->date_ended
            ]
            ];
        }

}
