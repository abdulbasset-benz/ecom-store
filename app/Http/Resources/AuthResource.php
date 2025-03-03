<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
    $data = [
        'id' => $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'created_at' => $this->created_at ? $this->created_at->toISOString() : null,
    ];

    if (property_exists($this, 'access_token') && filled($this->access_token)) {
        $data['token'] = [
            'access_token' => $this->access_token,
            'token_type' => 'Bearer',
            'expires_in' => (config('sanctum.expiration') ?? 60) * 60, 
        ];
    }

    return $data;
}

}