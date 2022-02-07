@extends('layouts.app')

@section('title','Kontrahenci / Edycja Kontrahenta')

@section('main')
<form action="/clients/update/{{$client->id}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="save" class="icon save" value="" click="true" />
    <a href="/clients" class="icon undo" click="true" /></a>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">*Nazwa:</label>
        <div class="col-md-8"><input type="text" name="name" id="name" value="{{$client->name}}"/></div>
    </div>
    <div class="form-group row">
        <label for="nip" class="col-md-2 col-form-label">NIP:</label>
        <div class="col-md-8"><input type="text" name="nip" id="nip" value="{{$client->nip}}"/></div>
    </div>
    <div class="form-group row">
        <label for="regon" class="col-md-2 col-form-label">Regon:</label>
        <div class="col-md-8"><input type="text" name="regon" id="regon" value="{{$client->regon}}"/></div>
    </div>
    <div class="form-group row">
        <label for="krs" class="col-md-2 col-form-label">KRS:</label>
        <div class="col-md-8"><input type="text" name="krs" id="krs" value="{{$client->krs}}"/></div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-md-2 col-form-label">Adres:</label>
        <div class="col-md-8"><input type="text" name="address" id="address" value="{{$client->address}}"/></div>
    </div>
    <div class="form-group row">
        <label for="telephone" class="col-md-2 col-form-label">Nr. telefonu:</label>
        <div class="col-md-8"><input type="text" name="telephone" id="telephone" value="{{$client->telephone}}"/></div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label">E-mail:</label>
        <div class="col-md-8"><input type="text" name="email" id="email" value="{{$client->email}}"/></div>
    </div>
    <div class="form-group row">
        <label for="payment_id" class="col-md-2 col-form-label">Metoda płatności:</label> 
        <div class="col-md-8">
            <select name="payment_id" id="payment_id">
                @foreach ($payments as $payment)
                @if ($payment['id'] == $client->payment_id)
                    <option value="{{$payment['id']}}" selected>{{$payment['name']}}</option>
                @else
                    <option value="{{$payment['id']}}">{{$payment['name']}}</option>
                @endif
            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="countrie_id" class="col-md-2 col-form-label">Kraj:</label> 
        <div class="col-md-8">
            <select name="countrie_id" id="countrie_id">
                @foreach ($countries as $countrie)
                    @if ($countrie['id'] == $client->countrie_id)
                        <option value="{{$countrie['id']}}" selected>{{$countrie['name']}}</option>
                    @else
                        <option value="{{$countrie['id']}}">{{$countrie['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="currency_id" class="col-md-2 col-form-label">Waluta:</label> 
        <div class="col-md-8">
            <select name="currency_id" id="currency_id">
                @foreach ($currencies as $currency)
                    @if ($currency['id'] == $client->currency_id)
                        <option value="{{$currency['id']}}" selected>{{$currency['shortName']}} - {{$currency['name']}}</option>
                    @else
                        <option value="{{$currency['id']}}">{{$currency['shortName']}} - {{$currency['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</form>
* - Pole obowiązkowe
@endsection