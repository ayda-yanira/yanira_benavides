@extends('master')
@section('content')

<div class="alert alert-primary" role="alert">
<h5 class="text-center">Listado editorial</h5>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">nombre</th>
            <th scope="col">direccion</th>
            <th scope="col">ciudad</th>
            <th scope="col">telefono</th>

        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $c)

            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombre }} </td>
            <td> {{ $c->direccion }}</td>
            <td> {{ $c->telefono}} </td>

            </tr>

    @endforeach
    </tbody>
</table >
@stop
