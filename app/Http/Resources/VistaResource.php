<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VistaResource extends JsonResource
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
            'stands_id' => $this->stand_id,
            'user_id' => $this->user_id,
            "visit_time" => $this->visit_time
        ];
    }
}
