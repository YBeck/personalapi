<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalInfo extends JsonResource
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
            'type' => 'personalInfo',
            'id' => (string)$this->id,
                'attributes'=>[
                'name' => $this->name,
                'email' => $this->email,
                'job' => $this->job,
                'links' => [
                    'website' => $this->website,
                    'repo' => $this->repo,
                    'linkedin' => $this->linkedin
                ]
                ]
            ];
    }
}
