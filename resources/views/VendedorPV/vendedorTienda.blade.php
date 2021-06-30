@extends('VendedorPV.plantillaVP.plantilla')
@section('mainTiendaPV')
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-12 contenido mt-4">
            <form action="{{route('api.productos')}}" method="GET" class="formSearchProductVenta">
                @csrf
                @method('GET')
                <input type="tel" name="sku" class="listProduct">
            </form>
            <table>
                <thead>
                    <tr>
                        <td><p>Nombre de producto</p></td>
                        <td><p>SKU</p></td>
                        <td><p>Cantidad</p></td>
                        <td><p>Precio</p></td>
                        <td><p>Total</p></td>
                    </tr>
                </thead>
                <tbody class="tbodyVentas" id="muestraProductos">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection