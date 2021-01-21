<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientCollection extends ResourceCollection
{
    /**
     * @var string
     */
    public $collects = ClientResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'data' => $this->collection
        ];
    }
}
