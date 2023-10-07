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
            @foreach($restaurantes as $restaurante)
            <tr class="">
                <td>{{$restaurante->ID}}</td>
                <td>{{$restaurante->Nombre}}</td>
                <td>{{$restaurante->Direccion}}</td>
                <td>{{$restaurante->Telefono}}</td>
                
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$restaurante->ID}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$restaurante->ID}}">
                Eliminar
                </button>
                </td>
            </tr>
            @include('restaurante.info')
            @endforeach
        </tbody>
    </table>
</div>


@include('restaurante.create')

@endsection