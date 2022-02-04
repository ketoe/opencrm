@extends('layouts.app')

@section('title','Ustawienia CRM')

@section('main')
<a href="/admins/payments" class="btn btn-primary">Metody Płatności</a>
<a href="/admins/countries" class="btn btn-primary">Lista Państw</a>
<a href="/admins/currencies" class="btn btn-primary">Lista Walut</a>
<a href="/admins/users" class="btn btn-primary">Lista użytkowników</a>
@endsection