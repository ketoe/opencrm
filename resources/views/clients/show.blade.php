@extends('layouts.app')

@section('title','Kontrahenci / Podglad kontrahenta')

@section('main')
<a href="/clients" class="icon undo" click="true"></a>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <h3 class="card-header">Dane podstawowe</h3>
            <div class="card-body">
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
    </div>
    <div class="col-sm-4">
        <div class="card">
            <h3 class="card-header">Statystyki</h3>
            <div class="card-body">
                <p class="card-text">

                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <h3 class="card-header">Edycja</h3>
            <div class="card-body">
                <p class="card-text">
                    <a href="/notesClients/create/{{$client->id}}" class="icon notes" click="true"></a>
                </p>
            </div>
        </div>
    </div>
</div>
<br />
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Notatki</div>
        <ul class="list-group list-group-flush">
            @foreach ($notes as $note)
                <li class="list-group-item">
                    <div class="small-text">
                        <b>Autor: </b>{{$note->user->name}} {{$note->user->surname}} |
                        <b>Data utworzenia: </b>{{$note->created_at}} |
                        <b>Data ostatniej modyfikacji: </b>{{$note->updated_at}} |
                        <b>Autor: </b>{{$note->user->name}} {{$note->user->surname}}
                        <div class="floatRight">
                            @if ($note->important)
                                <div class="icon star icon-small"></div>
                            @endif
                            @if (Auth::id() == $note->user_id)
                                <a href="/notesClients/edit/{{$note->id}}" class="icon edit icon-small floatRight" click="true"></a>
                                <a href="/notesClients/delete/{{$note->id}}" class="icon delete icon-small" click="true"></a>
                            @endif
                        </div>
                    </div>
                    {{$note->description}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection