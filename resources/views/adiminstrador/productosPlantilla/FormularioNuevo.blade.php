<form action="{{route('product.create')}}" method="post" enctype="multipart/form-data" id="FormProducts">
        @csrf
        @method('post')
    <div class="form-group mb-4 skuInput">
        <label><strong>SKU:</strong></label>
        <input type="tel" name="sku" class="inputProduct pl-2" id="sku">
    </div>
    <div class="form-group mb-4">
        <label for=""><strong>Nombre del producto:</strong></label>
        <input type="text" class="inputProduct" name="name" id="" require>
    </div>
    <div class="form-group mb-4">
        <label for=""><strong>Precio:</strong></label>
        <input type="number" class="inputProduct" name="price" id="">
    </div>
    <div class="form-group mb-4">
        <label for=""><strong>Cantidad a registrar:</strong></label>
        <input type="number" class="inputProduct" name="stock" id="">
    </div>
    <div class="form-group mb-4">
        <label for=""><strong>Descripción:</strong></label>
        <textarea name="description" class="texAreaProduct" rows="4"></textarea>
    </div>
    <div class="form-group mb-4">
        <label for=""><strong>Cargue la imagen del producto</strong></label>
        <input type="file" name="image" class="file">
    </div>
    <div class="form-submit text-center mb-4">
        <input type="submit" class="buttonSubmitProductForm" value="Enviar">
        <a href="" class="cancelar">Cancelar</a>
    </div>
</form>