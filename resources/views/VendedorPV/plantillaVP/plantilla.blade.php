<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <header class="headerVendedorPV">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="" class="sesion">{{ Auth::user()->name }}</a>
                    <div class="sesionMenu">
                        <ul class="ulSesion mb-0">
                            <li><a href="" class="Asesion"><i class="fas fa-pencil-alt"></i> Mi perfil</a></li>
                            <li><a href="{{ url('/logout') }}" class="Asesion"><i class="fas fa-power-off"></i> Cierre sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        @yield('mainTiendaPV')
    </section>
</body>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js" ></script>
<script src="{{asset('js/vendedorTienda.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>