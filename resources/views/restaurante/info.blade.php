<div class="modal fade" id="edit{{$restaurante->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Restaurante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('restaurantes.update',$restaurante->ID)}}" method="post">
      @csrf
      @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="" value="{{$restaurante->Nombre}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Direccion</label>
          <input type="text"
            class="form-control" name="Direccion" id="" aria-describedby="helpId" placeholder="" value="{{$restaurante->Direccion}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Telefono</label>
          <input type="number"
            class="form-control" name="Telefono" id="" aria-describedby="helpId" placeholder="" value="{{$restaurante->Telefono}}">
         
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






<div class="modal fade" id="delete{{$restaurante->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Restaurante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('restaurantes.destroy',$restaurante->ID)}}" method="post">
      @csrf
      @method('DELETE')
      <div class="modal-body">
      Estas seguro de eliminar a <strong>{{$restaurante->Nombre}}?</strong>
        </div>
        
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>