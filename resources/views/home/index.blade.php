@extends('layouts.app')

@section('title','Strona Główna')


@section('main')
<div class="col-md-12">
    <div class="card">
      <div class="card-header">Najnowsze notatki - Kontrahenci</div>
      <ul class="list-group list-group-flush">
        @if ($notesClients->count() == 0)
            <li class="list-group-item">Brak notatek do wyświetlenia</li>
        @else
            @foreach ($notesClients as $noteClient)
                <li class="list-group-item">
                    <div class="small-text">
                        <b>Kontrahent: </b>{{$noteClient->client->name}} | 
                        <b>Autor: </b>{{$noteClient->user->name}} {{$noteClient->user->surname}} |
                        <b>Data utworzenia: </b>{{$noteClient->created_at}} |
                        <b>Data ostatniej modyfikacji: </b>{{$noteClient->updated_at}} |
                        <b>Autor: </b>{{$noteClient->user->name}} {{$noteClient->user->surname}}
                        <div class="floatRight">
                            @if (Auth::id() == $noteClient->user_id)
                                <a href="/notesClients/edit/{{$noteClient->id}}" class="icon edit icon-small" click="true"></a>
                                <a href="/notesClients/delete/{{$noteClient->id}}" class="icon delete icon-small" click="true"></a>
                            @endif
                            @if ($noteClient->important)
                                <div class="icon star icon-small"></div>
                            @endif
                        </div>
                    </div>
                    {{$noteClient->description}}
                </li>
            @endforeach
        @endif
      </ul>
    </div>
</div>
@endsection