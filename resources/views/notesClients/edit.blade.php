@extends('layouts.app')

@section('title','Kontrahenci / Notatki / Edycja notatki')

@section('main')

<form action="/notesClients/update/{{$note->id}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/clients/{{$note->client_id}}" class="icon undo" click="true" /></a>
    <br />
    Kontrahent: {{$note->client->name}}<br />
    <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label">Treść:</label>
        <div class="col-md-8"><textarea name="description" id="description">{{$note->description}}</textarea></div>
    </div>
    <div class="form-group row">
        <label for="important" class="col-md-2 col-form-label">Ważna notatka:</label>
        @if ($note->important)
            <div class="col-md-2"><input type="checkbox" value="1" checked id="important" name="important"/></div>
        @else
            <div class="col-md-2"><input type="checkbox" value="1" id="important" name="important"/></div>
        @endif
    </div>
</form>
@endsection