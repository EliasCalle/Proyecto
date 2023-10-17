

<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Platos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('platos.store')}}" method="post">
      @csrf
      <div class="modal-body">
      <div class="mb-3">
          <label for="" class="form-label">Restaurante</label>
          <select name="Id_restaurante" id="" class="form-control">
          @foreach($restaurantes as $restaurante)
            <option value="{{$restaurante->ID}}">{{$restaurante->Nombre}}</option>
          @endforeach
          </select>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="Nombre" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input type="number"
            class="form-control" name="Precio" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Stock</label>
          <input type="number"
            class="form-control" name="Stock" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        
        <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" class="form-control" name="Imagen" id="" aria-describedby="helpId" placeholder="">
</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>