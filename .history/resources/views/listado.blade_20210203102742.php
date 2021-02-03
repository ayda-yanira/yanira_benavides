@extends('principal')
@section('contenido')

<h1> listado libros </h1>

<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">isbn</th>
            <th scope="col">titulo </th>
            <th scope="col">stock</th>
            <th scope="col">estado</th>
            <th scope="col">editorial</th>
            <th scope="col">precioa</th>
            <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
        </tr>
    </thead>
    <tbody>
    @foreach($libro as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->nombreCategoria }} </td>
                <td> {{ $c->descripcion }}</td>
                <td> <a href="{{route('form_actualizaCategoria',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('eliminarCategoria', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop
