@extends('adiminstrador.plantilla.plantillaApp')
@section('mainAdmin')
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="headerAdminiUser">
                <div class="contenFormu">
                    <form action="" class="formSearch">
                        <input type="search" name="name" class="searchUser" placeholder="Nombre del producto...">
                        <button type="submit" class="btnSearch"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="modalAddMore">
                    <a href="" type="button" class="AddMoreCode" data-toggle="modal" data-target="#modalCode"><i class="fas fa-barcode"></i></a>
                    <a href="" class="AddMoreProduct"><i class="fas fa-archive"></i></a>
                </div>
            </div>
            <!-- modal codigo de barra nuevo -->
            <div class="modal" id="modalCode">
                <div class="modal-dialog" id="ModalCode">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <p>El código de barra se ha generado satisfactoriamente. <br>
                                Has clic en continuar para proceder con el registro del nuevo producto.</p>
                            <p class="codeModal"><span class="code" id="code" style=""></span> <span class="codeNormal" id="numero"></span></p>
                            <a href="" class="cosedModalCode" data-dismiss="modal">Confirmar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalCodeEscaner">
                <div class="modal-dialog" id="ModalCode">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <p>Escanea el código de barra y presiona en continuar</p>
                            <input type="tel" name="sku" id="codigoEscaneado" class="inputSku">
                            <a href="" class="cosedModalCode" id="escaneado">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bodyProduct">
                <div class="fondoVinoForm mt-3">
                    <div class="formAddProduct"> 
                        <div class="formularioProducto">
                            @include('adiminstrador.productosPlantilla.FormularioNuevo')
                        </div>
                        <div class="muestra">
                            
                        </div>
                    </div>
                </div>
                @if (Session::has('mensaje'))
                    <div id="mensajeError"><p>{{ Session::get('mensaje') }}</p></div>
                @endif
                @if (Session::has('Exito'))
                    <div id="mensajeExito"><p>{{ Session::get('Exito') }}</p></div>
                @endif
                <div class="productos mt-3">
                    <table>
                        <thead>
                            <tr>
                                <td class="tHead"><p>Imagen</p></td>
                                <td class="tHead"><p>SKU</p></td>
                                <td class="tHead"><p>Nombre</p></td>
                                <td class="tHead"><p>Precio</p></td>
                                <td class="tHead"><p>Unidades</p></td>
                                <td class="tHead"><p>Vendidos</p></td>
                                <td class="tHead"></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                        <tr class="tbody">
                            <td class="image p-2"><img src="storage/{{ $producto->image }}" alt="" width="60px" height="60px"></td>
                            <td class="sku"><p>{{$producto->sku}}</p></td>
                            <td class="name"><p>{{$producto->name}}</p></td>
                            <td class="precio"><p>$ {{$producto->price}}</p></td>
                            <td class="stock text-center"><p>{{$producto->stock}}</p></td>
                            <td class="sales text-center"><p>{{$producto->sales}}</p></td>
                            <td>
                                <div class="botonesProduct">
                                    <button type="button" class="edita" data-toggle="modal" data-target="#modal{{$producto->id}}"><i class="fas fa-pencil-alt"></i></button>
                                    @include('adiminstrador.productosPlantilla.Elimina')
                                </div>
                            </td>
                            @include('adiminstrador.productosPlantilla.EditaFormulario')
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="paginador mt-3">
                        {{$productos->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
