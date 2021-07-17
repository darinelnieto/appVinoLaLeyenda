<!DOCTYPE html>
<html lang="es" class="appAdmin">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>aplicación de control y ventas</title>
</head>
<body>
    <header class="headerAppAdmin pt-3">
        <div class="menu">
            <a href="" class="barMenu"><i class="fa fa-bars"></i></a>
        </div>
        <div class="avatarMigas row">
            <div class="col-6">
            
            </div>
            <div class="col-5 text-right">
                <a href="" class="sesion">{{ Auth::user()->name }} <span><i class="fas fa-user"></i></span></a>
                <div class="sesionMenu">
                    <ul class="ulSesion mb-0">
                        <li><a href="" class="Asesion"><i class="fas fa-pencil-alt"></i> Mi perfil</a></li>
                        <li><a href="{{ url('/logout') }}" class="Asesion"><i class="fas fa-power-off"></i> Cierre sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
    <section class="contenedor">
        <article class="menuApp">
            <div class="logoApp">
                <img src="{{asset('img/logo-vino-03.png')}}" alt="Logo vino la leyenda" class="imgLogoApp">
            </div>
            <nav class="control">
                <ul class="nav flex-column ulControl">
                    <li class="nav-item itemUsuarios">
                        <a href="{{route('appVinosAdmin')}}" class="nav-link active"><span><i class="fas fa-user-tie"></i></span><span class="nombre ItemMenu"> Usuarios</span></a>
                    </li>
                    <li class="nav-item dropdown itemInventario">
                        <a class="nav-link dropdown-toggle usuarios" data-toggle="dropdown" href="#">
                            <span><i class="fas fa-clipboard-list"></i></span><span class="nombre ItemMenu"> Inventario</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('listaProductos')}}" class="pl-4">Productos</a>
                            <a href="{{route('codeImprime')}}" class="pl-4">Códigos de barra</a>
                        </div>
                    </li>
                    <li class="nav-item itemVentas">
                        <a href="{{route('ventaAdministrador')}}" class="nav-link"><span><i class="fa fa-shopping-cart"></i></span><span class="nombre ItemMenu"> Venta</span></a>
                    </li>
                </ul>
            </nav>
        </article>
        <article class="contieneContApp mt-3">
            @yield('mainAdmin')
        </article>
</section>
</body>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js" ></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('js/vendedorTienda.js')}}"></script>
<script src="{{ asset('js/adminApp.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>