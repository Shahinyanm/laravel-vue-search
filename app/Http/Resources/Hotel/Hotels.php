<?php

namespace App\Http\Resources\Hotel;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Hotels extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function ($hotel) {
            return (new Hotel($hotel));
        });
        return parent::toArray($request);
    }
}
