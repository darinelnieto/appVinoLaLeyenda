@extends('adiminstrador.plantilla.plantillaApp')
@section('mainAdmin')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="headerAdminUser">
                <div class="contenFormu" style="width:300px">
                    <form action="" class="formSearch">
                        <input type="search" name="name" class="searchUser" placeholder="Nombre del producto...">
                        <button type="submit" class="btnSearch"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="bodyProduct mt-3">
                <table>
                    <thead>
                        <tr>
                            <td class="tHead"><p>Código de barra</p></td>
                            <td class="tHead"><p>Nombre de producto asociado</p></td>
                            <td class="tHead"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($codigos as $codigo)
                            <tr class="codeTable">
                                <td class="code{{$codigo->sku}} pl-3"><p class="codigo">{{$codigo->sku}}</p></td>
                                <td class="nombreProducto{{$codigo->sku}} pl-2"><p class="mb-0">{{$codigo->name}}</p></td>
                                <td class="botonImprime"><a href="" class="imprime{{$codigo->sku}}" id="btnImprime"><i class="fas fa-print"></i></a></td>
                            </tr>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script>
                                $('.imprime{{$codigo->sku}}').click(function(e){
                                    $.print('.code{{$codigo->sku}}');
                                    e.preventDefault();
                                });
                            </script>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginador mt-3">
                    {{$codigos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection