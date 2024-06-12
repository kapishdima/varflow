<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectWebResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'card_title' => $this->card_title,
            'title' => $this->title,
            'description' => $this->description,
            'main_image' => $this->main_image,
            'type' => $this->type,
            'tags' => json_decode($this->tags),
            'content' => json_decode($this->content)
        ];
    }
}
