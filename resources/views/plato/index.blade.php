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
                <th scope="col">Restaurante</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platos as $plato)
            <tr class="">
                <td>{{$plato->ID}}</td>
                <td>{{$plato->restaurante->Nombre}}</td>
                <td>{{$plato->Nombre}}</td>
                <td>{{$plato->Precio}}</td>
                <td>{{$plato->Stock}}</td>
                <td>{{$plato->Imagen}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#edit{{$plato->ID}}">Editar</button>
                        <a href="{{ route('platos.destroy', $plato->ID) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form{{$plato->ID}}').submit();">
                        Eliminar
                    </a>
                    <form id="delete-form{{$plato->ID}}" action="{{ route('platos.destroy', $plato->ID) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
            </tr>
            @include('plato.info')
            @endforeach
        </tbody>
    </table>
</div>

@include('plato.create')

@endsection