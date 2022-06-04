<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BuyProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->product->name,
            'price' => $this->product->price,
            'quantity' => $this->quantity,
        ];
    }


    public function with($request)
    {
        return [
            'status' => 'success',
        ];
    }
}
