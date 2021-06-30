<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body class="body">
    <header class="header">
    <div class="container">
        <div class="row headerRow">
            <div class="col-3">
                <a href="/login" class="loginRedirect"><i class="fas fa-user-tie"></i> Login</a>
            </div>
            <div class="col-9">
                <ul class="nav-bar mb-0">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#somos" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#producto" class="nav-link">Producto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#historia" class="nav-link">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a href="#ubicacion" class="nav-link">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </header>
    @yield('main')
    <footer id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <p class="footerBlanco mb-0">Comunicate con nosotros al numero:</p>
                <a href="tel:3108816787" target="blank" class="footerBlanco">3108816787</a>
            </div>
            <div class="col-12 col-md-4">
                <div class="row mb-3" style="align-items:center">
                    <div class="col-12 text-center">
                        <p class="pFooter">Apoya</p>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/logo-sena-03.png')}}" alt="" width="100%">
                    </div>
                    <div class="col-6 text-right">
                        <img src="{{asset('img/logo-vino-03.png')}}" alt="" class="logoVino">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 mb-md-0 contenlinksFooter">
                <p class="linkRedesFooter"><a href="" target="blank"><i class="fab fa-facebook-f"></i></a></p>
                <p class="linkRedesFooter"><a href="" target="blank"><i class="fab fa-instagram"></i></a></p>
                <p class="linkRedesFooter"><a href="" target="blank"><i class="fab fa-whatsapp"></i></a></p>
            </div>
        </div>
    </div>
    <div class="botellaVino">
        <img src="{{asset('img/vino-footer.png')}}" alt="" class="imgCopy">
    </div>
    <div class="copyRight">
        <div class="container">
            <div class="row contenCopyR">
                <div class="col-12 mt-md-3 text-center">
                    <p class="copyR mb-0">Todos los derechos reservados por Vino La Leyenda</p>
                </div>
            </div>
        </div>
    </div>
    </footer>
</body>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{ asset('js/landing.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
$('.owl-carousel.slider').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>
</html>