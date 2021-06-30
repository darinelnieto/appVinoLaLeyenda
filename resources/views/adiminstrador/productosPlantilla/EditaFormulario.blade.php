<div class="modal" id="modal{{$producto->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <form action="{{route('edit.product')}}" method="post" enctype="multipart/form-data" id="FormProducts">
                        @csrf
                        @method('post')
                        <input type="hidden" name="id" value="{{$producto->id}}">
                    <div class="form-group mb-4 FormEdicion">
                        <label><strong>SKU:</strong></label>
                        <input type="tel" name="sku" class="inputProduct pl-2" id="" value="{{$producto->sku}}">
                    </div>
                    <div class="form-group mb-4 FormEdicion">
                        <label for=""><strong>Nombre del producto:</strong></label>
                        <input type="text" class="inputProduct pl-2" name="name" value="{{$producto->name}}" require>
                    </div>
                    <div class="form-group mb-4 FormEdicion">
                        <label for=""><strong>Precio:</strong></label>
                        <input type="number" class="inputProduct pl-2" name="price" value="{{$producto->price}}" id="">
                    </div>
                    <div class="form-group mb-4 FormEdicion">
                        <label for=""><strong>Cantidad a registrar:</strong></label>
                        <input type="number" class="inputProduct pl-2" name="stock" value="{{$producto->stock}}" id="">
                    </div>
                    <div class="form-group mb-4 FormEdicion">
                        <label for=""><strong>Descripción:</strong></label>
                        <textarea name="description" class="texAreaProduct pl-2" rows="4" value="{{$producto->description}}"></textarea>
                    </div>
                    <div class="form-group mb-4 FormEdicion">
                        <label for=""><strong>Cargue la imagen del producto</strong></label>
                        <input type="file" name="image" class="file" value="{{$producto->image}}">
                    </div>
                    <div class="form-submit text-center mb-4">
                        <input type="submit" class="buttonSubmitProductForm" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>