<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'titulo' => $this->title,
            'url' => $this->slug,
            'extracto' => $this->excerpt,
            'contenido' => $this->content,
        ];
    }
}
