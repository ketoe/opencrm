@extends('layouts.app')

@section('title','Metody Płatności')

@section('main')
<a href="/admins/payments/create" class="icon add" click="true"></a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payments as $payment)
            <tr>
                <td>{{$payment['id']}}</td>
                <td>{{$payment['name']}}</td>
                <td><a href="/admins/payments/edit/{{$payment['id']}}" click="true" class="icon edit icon-small"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$payments->links()}}


@endsection