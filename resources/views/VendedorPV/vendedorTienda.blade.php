@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-12 contenido mt-4">
            <div class="formControlador mt-3">
                <form class="select">
                    <div class="selert">
                        <select name="selecciona" class="selectorMetodo">
                            <option value="escanner">Escaner</option>
                            <option value="nombre de producto">Buscar por nombre de producto</option>
                        </select>
                    </div>
                    <div class="botonSelert">
                        <input type="button" class="okSelert" value="Ok">
                    </div>
                </form>
                <form action="{{route('api.productos')}}" method="GET" class="formSearchProductVenta">
                    @csrf
                    @method('GET')
                    <input type="tel" name="sku" class="listProduct">
                </form>
            </div>
            <div class="contentTbody mt-2">
                <table>
                    <thead>
                        <tr>
                            <td width="40%" class="pl-3"><p>Nombre de producto</p></td>
                            <td width="20%"><p>SKU</p></td>
                            <td width="4%" class="text-center"><p>Cantidad</p></td>
                            <td width="13%" class="text-center"><p>Precio</p></td>
                            <td width="13%" class="text-center pr-2"><p>Total</p></td>
                            <td width="20%"></td>
                        </tr>
                    </thead>
                    <tbody class="tbodyVentas" id="muestraProductos">
                    
                    </tbody>
                </table>
            </div>
            <div class="pieTabla">
                <div class="btnCotrolaTabla">
                    <a href="#" class="cancelarVenta">Cancelar vanta</a>
                    <a href="#" class="botonFinalizaCompra">Finalizar compra</a>
                </div>
                <div class="tfooter"></div>
            </div>
        </div>
    </div>
</div>
@endsection