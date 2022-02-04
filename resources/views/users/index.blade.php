@extends('layouts.app')

@section('title','Użytkownicy')

@section('main')
<a href="/admins/users/create" class="icon add" click="true"></a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Administrator</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['surname']}}</td>
                <td>{{$user['email']}}</td>
                @if ($user['admin'])
                <td><div class="icon true icon-small"></div></td>
                @else
                <td><div class="icon false icon-small"></div></td>
                @endif
                <td><a href="/admins/users/edit/{{$user['id']}}" click="true" class="icon edit icon-small"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$users->links()}}


@endsection