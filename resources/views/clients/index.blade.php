@extends('layouts.app')

@section('title','Kontrahenci')

@section('main')
<a href="/clients/create" class="icon add" click="true"></a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>NIP</th>
            <th>Kontakt</th>
            <th>Email</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{$client['id']}}</td>
                <td>{{$client['name']}}</td>
                <td>{{$client['nip']}}</td>
                <td>{{$client['telephone']}}</td>
                <td>{{$client['email']}}</td>
                <td>
                    <a href="/clients/edit/{{$client['id']}}" click="true" class="icon edit icon-small"></a>
                    <a href="/clients/{{$client['id']}}" click="true" class="icon info icon-small"></a>
                    <a href="/notesClients/create/{{$client['id']}}" class="icon notes icon-small" click="true"></a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$clients->links()}}
@endsection