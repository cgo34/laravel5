<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;
class UserResource extends Resource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        //print_r($request);
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'email' => $this->email,
        ];
    }
}