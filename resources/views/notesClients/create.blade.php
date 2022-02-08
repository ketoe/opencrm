@extends('layouts.app')

@section('title','Kontrahenci / Nowa Notatka')

@section('main')

<form action="/notesClients/store/{{$client->id}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/clients/{{$client->id}}" class="icon undo" click="true" /></a>
    <br />
    Kontrahent: {{$client->name}}<br />
    <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label">Treść:</label>
        <div class="col-md-8"><textarea name="description" id="description"></textarea></div>
    </div>
    <div class="form-group row">
        <label for="important" class="col-md-2 col-form-label">Ważna notatka:</label>
        <div class="col-md-2"><input type="checkbox" value="1" id="important" name="important"/></div>
    </div>
</form>
@endsection