@if(Auth::user()->rol === "Administrador")
    @include('adiminstrador/administrador')
@endif
@if(Auth::user()->rol === "Vendedor Tienda")
@include('VendedorPV/vendedorTienda')
@endif
@if(Auth::user()->rol === "Vendedor Redes Sociales")
@include('VendedorPV/vendedorTienda')
@endif