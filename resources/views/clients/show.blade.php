@extends('layouts.app')

@section('title','Kontrahenci / Podglad kontrahenta')

@section('main')
<a href="/clients" class="icon undo" click="true"></a>

<div class="row">
    <div class="col-sm-6">
        <div class="card card-body">
            <h3 class="card-title">Dane podstawowe</h3>
            <p class="card-text">
                <div class="row">
                    <div class="col-md-4"><b>Nazwa:</b></div><div class="col-md-8"> {{$client->name}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Adres:</b></div><div class="col-md-8"> {{$client->address}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Nip:</b></div><div class="col-md-8"> {{$client->nip}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Krs:</b></div><div class="col-md-8"> {{$client->krs}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Regon:</b></div><div class="col-md-8"> {{$client->regon}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Email:</b></div><div class="col-md-8"> {{$client->email}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Telefon:</b></div><div class="col-md-8"> {{$client->telephone}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Kraj:</b></div><div class="col-md-8"> {{$client->countrie->name}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Metoda płatności:</b></div><div class="col-md-8"> {{$client->payment->name}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Waluta:</b></div><div class="col-md-8"> {{$client->currency->shortName}} - {{$client->currency->name}}</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><b>Handlowiec:</b></div><div class="col-md-8"> {{$client->user->name}} {{$client->user->surname}}</div>
                </div>
            </p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-body">
            <h3 class="card-title">Statystyki</h3>
            <p class="card-text">

            </p>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card card-body">
            <h3 class="card-title">Edycja</h3>
            <p class="card-text">

            </p>
        </div>
    </div>
</div>
@endsection