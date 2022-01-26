<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use App\Models\Currency;
use App\Models\Payment;
use App\Models\Client;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'description' => $this->description,
            'client' => new ClientResource(Client::findOrFail($this->client_id)),
            'value' => $this->value,
            'currency' => new CurrencyResource(Currency::findOrFail($this->currency_id)),
            'user' => new UserResource(User::findOrFail($this->user_id)),
            'address' => $this->address,
            'payment' => new PaymentResource(Payment::findOrFail($this->payment_id)),
            'archive' => $this->archive,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
