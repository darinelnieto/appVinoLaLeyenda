<div class="modal fade" id="modalBuquedaNombre">
    <div class="modal-dialog busquedaNombre">
        <div class="modal-content modalBusquedaNombre">
            <div class="modal-body pt-4 pb-4">
                <div class="formSearcName">
                    <form action="{{route('productos.nombre')}}" method="GET" class="text-center searchNameProduct">
                        @csrf
                        @method('GET')
                        <input type="text" name="name" class="nameSearch" placeholder="Nombre del producto">
                        <button type="submit" class="searcModalProductVenta"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="cuerpoModalProductSearch">
                    <table>
                        <thead>
                            <tr>
                                <td><p>Imagen</p></td>
                                <td><p>SKU</p></td>
                                <td><p>Nombre</p></td>
                                <td><p>Precio</p></td>
                                <td><p>En inventario</p></td>
                            </tr>
                        </thead>
                        <tbody class="ProductRespuesta"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>