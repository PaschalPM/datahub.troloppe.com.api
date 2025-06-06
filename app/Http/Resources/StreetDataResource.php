<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StreetDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $resource = [
            'id' => $this->id,
            'unique_code' => $this->unique_code,
            'street_address' => $this->street_address,
            'section' => $this->section->name,
            'section_id' => $this->section->id,
            'location' => $this->location->name,
            'location_id' => $this->location->id,
            'sector' => ucwords($this->sector->name),
            'sector_id' => $this->sector->id,
            'sub_sector' => $this->subSector?->name,
            'sub_sector_id' => $this->subSector?->id,
            'image_path' => $this->image_path,
            'is_verified' => $this->is_verified,
            'created_at' => $this->created_at,
            'creator' => str($this->creator->name)->title(),
            'creator_id' => $this->creator->id
        ];

        if (request()->routeIs('street-data.index'))
            return $resource;

        $resource['development_name'] = $this->development_name;
        $resource['description'] = $this->description;
        $resource['number_of_units'] = $this->number_of_units;
        $resource['size'] = $this->size;
        $resource['contact_name'] = $this->contact_name;
        $resource['contact_numbers'] = $this->contact_numbers;
        $resource['contact_email'] = $this->contact_email;
        $resource['construction_status'] = $this->construction_status;
        $resource['geolocation'] = $this->geolocation;

        return $resource;
    }
}
