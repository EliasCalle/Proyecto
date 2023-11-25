@extends('welcome')
@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Agregar
</button>



<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
            <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
               
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr class="">
                <td>{{$cliente->ID}}</td>
                <td>{{$cliente->Nombre}}</td>
                <td>{{$cliente->Direccion}}</td>
                <td>{{$cliente->Telefono}}</td>
                
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->ID}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->ID}}">
                Eliminar
                </button>
                </td>
            </tr>
            @include('clientes.info')
            @endforeach
        </tbody>
    </table>
</div>


@include('clientes.create')

@endsection