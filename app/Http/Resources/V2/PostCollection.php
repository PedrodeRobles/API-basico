<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Pedro de Robles',
                'author' => 'Pedro de Robles'
            ],
            'type' => 'articles'
        ];
    }
}
