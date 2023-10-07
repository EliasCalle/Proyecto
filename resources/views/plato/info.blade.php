<div class="modal fade" id="edit{{$plato->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Plato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('platos.update',$plato->ID)}}" method="post">
      @csrf
      @method('PUT')
      <div class="modal-body">
      <div class="mb-3">
          <label for="" class="form-label">Restaurante</label>
          <select name="Id_restaurante" id="" class="form-control">
          @foreach($restaurantes as $restaurante)
          @if($restaurante->ID == $plato->Id_restaurante)
            <option value="{{$restaurante->ID}}" selected>{{$restaurante->Nombre}}</option>
          @else
          <option value="{{$restaurante->ID}}">{{$restaurante->Nombre}}</option>
          @endif
          @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="" value="{{$plato->Nombre}}">
    
        <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input type="number"
            class="form-control" name="Precio" id="" aria-describedby="helpId" placeholder="" value="{{$plato->Precio}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Stock</label>
          <input type="number"
            class="form-control" name="Stock" id="" aria-describedby="helpId" placeholder="" value="{{$plato->Stock}}">
         
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Imagen</label>
          <input type="text"
            class="form-control" name="Imagen" id="" aria-describedby="helpId" placeholder="" value="{{$plato->Imagen}}">
         
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>









<div class="modal fade" id="eliminar{{$plato->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Plato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('platos.destroy',$plato->ID)}}" method="post">
      @csrf
      @method('DELETE')
      <div class="modal-body">
      Estas Seguro de querer eliminar <strong>{{$plato->Nombre}}</strong>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>






