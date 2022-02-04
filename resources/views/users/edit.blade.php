@extends('layouts.app')

@section('title','Kraje / Edycja')

@section('main')


<form action="/admins/currencies/update/{{$id}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/admins/currencies" class="icon undo" click="true" /></a>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">Nazwa:</label>
        <div class="col-md-3"><input type="text" name="name" id="name" value="{{$value}}"/></div>
    </div>
    <div class="form-group row">
        <label for="shortName" class="col-md-2 col-form-label">Krótka nazwa:</label>
        <div class="col-md-3"><input type="text" name="shortName" id="shortName" value="{{$shortName}}"/></div>
    </div>
    <div class="form-group row">
        <label for="value" class="col-md-2 col-form-label">Wartość:</label>
        <div class="col-md-3"><input type="integer" name="value" id="value" value="{{$value}}" /></div>
    </div>
</form>
@endsection