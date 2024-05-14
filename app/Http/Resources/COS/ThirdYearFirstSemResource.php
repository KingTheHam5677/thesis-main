<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThirdYearFirstSemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'course_code' => $this->course_code,
            'description' => $this->description,
            'units' => $this->units,
            'prerequisite' => $this->prerequisite,
            'corequisite' => $this->corequisite,
        ];
    }
}
