<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Countrie;
use App\Models\Currency;
use App\Models\User;
use App\Models\Payment;

class ClientResource extends JsonResource
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
            'name' => $this->name,
            'nip' => $this->nip,
            'regon' => $this->regon,
            'krs' => $this->krs,
            'address' => $this->address,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'countrie' => new CountrieResource(Countrie::findOrFail($this->countrie_id)),
            'currency' => new CurrencyResource(Currency::findOrFail($this->currency_id)),
            'user' => new UserResource(User::findOrFail($this->user_id)),
            'payment' => new PaymentResource(Payment::findOrFail($this->payment_id)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
