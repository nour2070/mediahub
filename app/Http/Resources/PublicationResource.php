<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titre' => $this->titre,
            'contenu' => $this->contenu,
            'categorie' => $this->categorie?->nom,
            'image' => $this->image ? asset('storage/' . $this->image) : null,
            'date' => $this->created_at?->format('d/m/Y'),
        ];
    }
}