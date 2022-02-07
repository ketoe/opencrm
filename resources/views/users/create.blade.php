@extends('layouts.app')

@section('title','Użytkownicy / Nowy')

@section('main')

<form action="/admins/users/store" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/admins/users" class="icon undo" click="true" /></a>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">Nazwa:</label>
        <div class="col-md-5"><input type="text" name="name" id="name" /></div>
    </div>
    <div class="form-group row">
        <label for="surname" class="col-md-2 col-form-label">Nazwisko:</label>
        <div class="col-md-5"><input type="text" name="surname" id="surname" /></div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label">E-mail:</label>
        <div class="col-md-5"><input type="text" name="email" id="email" /></div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-2 col-form-label">Hasło:</label>
        <div class="col-md-5"><input type="text" name="password" id="password" /></div>
    </div>
</form>
@endsection