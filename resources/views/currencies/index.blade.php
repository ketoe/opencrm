@extends('layouts.app')

@section('title','Waluty')

@section('main')
<a href="/admins/currencies/create" class="icon add" click="true"></a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>Krótka Nazwa</th>
            <th>Wartość</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($currencies as $currency)
            <tr>
                <td>{{$currency['id']}}</td>
                <td>{{$currency['name']}}</td>
                <td>{{$currency['shortName']}}</td>
                <td>{{$currency['value']}}</td>
                <td><a href="/admins/currencies/edit/{{$currency['id']}}" click="true" class="icon edit icon-small"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$currencies->links()}}


@endsection