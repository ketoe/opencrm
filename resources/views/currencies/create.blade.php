@extends('layouts.app')

@section('title','Waluty / Nowy')

@section('main')

<form action="/admins/currencies/store" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/admins/currencies" class="icon undo" click="true" /></a>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">Nazwa:</label>
        <div class="col-md-3"><input type="text" name="name" id="name" /></div>
    </div>
    <div class="form-group row">
        <label for="shortName" class="col-md-2 col-form-label">Krótka nazwa:</label>
        <div class="col-md-3"><input type="text" name="shortName" id="shortName" /></div>
    </div>
    <div class="form-group row">
        <label for="value" class="col-md-2 col-form-label">Wartość:</label>
        <div class="col-md-3"><input type="integer" name="value" id="value" /></div>
    </div>
</form>
@endsection