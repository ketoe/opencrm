@extends('layouts.app')

@section('title','Metody Płatnosci / Edycja')

@section('main')


<form action="/admins/payments/update/{{$id}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="submit" name="add" class="icon save" value="" click="true" />
    <a href="/admins/payments" class="icon undo" click="true" /></a>
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">Nazwa:</label>
        <div class="col-md-3"><input type="text" name="name" id="name" value="{{$name}}"/></div>
    </div>
</form>
@endsection