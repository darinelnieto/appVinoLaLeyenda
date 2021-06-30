@extends('plantillaUno.headerFooter')

@section('main')
<main class="mainLanding">
<section id="inicio">
    <!-- banner slider -->

    <div class="owl-carousel slider owl-theme">
        <div class="item">
            <img src="{{asset('img/acordeonVino.jpg')}}" alt="" width="100%">
            <img src="{{ asset('img/corte-banner-04.png') }}" alt="" class="fondoBanner">
        </div>
        <div class="item">
            <img src="{{asset('img/slideDos.jpg')}}" alt="" width="100%">
            <img src="{{ asset('img/corte-banner-04.png') }}" alt="" class="fondoBanner">
        </div>
    </div>
</section>
<!-- sección somos  -->
<section id="somos">
    <div class="imgIsquierdaSomos">
        <img src="{{asset('img/copa.png')}}" alt="" width="100%">
    </div>
    <div class="informacionSomos">
        <div class="container pt-lg-5">
            <div class="row mt-lg-5">
                <div class="col-12 text-center">
                    <h2 class="tituloSomos mb-3">NOSOTROS</h2>
                    <p class="parrafoSomos">No vendemos solamente el vino la leyenda, sino también su historia. <br>
                    La cultura nos identifica, la tradición es nuestra pasión, el sabor es nuestro <br> 
                    sello y la calidad nuestra imagen.</p>
                </div>
            </div>
        </div> 
    </div>
    <div class="imgDerechaSomos">
        <img src="{{asset('img/uvas-04.png')}}" alt="" width="100%">
    </div>
</section>
<!-- banner central producto -->
<section id="producto">
    <div class="contenidoBannerCentral mt-5">
        <div class="izquierdaBannerCentral">
            <div class="container">
                <div class="row">
                    <div class="col-8 mb-md-5 offset-2">
                        <h4 class="tituloProducto">La Viña Del Vino</h4>
                        <p class="infoBannerCentro">Sin duda es el mejor vino de <br> corozo que podrás probar</p>
                        <a href="" class="botonBannerVerProducto">Ver Producto</a>
                    </div>
                </div>
            </div>
            <img src="{{asset('img/derrame-de-vino-04.png')}}" alt="" width="50%">
        </div>
        <div class="derechaBannerCentro">
            <img src="{{asset('img/copa-vino-banner-centro-03.png')}}" alt="" width="100%">
        </div>
    </div>
</section>
<!-- seccion videos -->
<section id="historia">
    <div class="container">
        <div class="row mt-5 contieneVideo">
            <div class="col-12 mb-3 text-center">
                <h2 class="tituloPrincipalSeccionVideo">NUESTRA HISTORIA</h2>
            </div>
            <div class="col-12 col-md-6">
                <!-- Espacio recerbado paa enbeber el video de youtuve -->
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pbWTgSbw0Bk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-6 text-center">
                <h4 class="tituloSeccionVideo">MÁS QUE UNA LEYENDA, ES UN GRAN VINO</h4>
                <p class="informacionVideo">Si te has preguntado por el vino la leyenda y aún no conoces la calidad de su contenido, te invito 
                a probarlo. Es un vino semiseco, con un bouquet fino y elegante, que te lleva a recordar tus más bellos momentos. Conserva 
                los taninos del corozo, y lleva en sí una historia hermosa que te impacta.</p>
            </div>
        </div>
    </div>
</section>
<!-- sección de ubicación -->
<section id="ubicacion">
    <div class="container">
        <div class="row mt-5 mb-5 alineaContenido">
            <div class="col-12 text-center">
                <h2 class="tituloUbicacion mb-4">NUESTRA UBICACIÓN</h2>
            </div>
            <div class="col-12 movil">
                <!-- ifren de mapa para moviles -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7865.383826774971!2d-73.278949!3d9.707314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6071d53b50884b%3A0xc931535295c25938!2sCl.%204%2C%20Becerril%2C%20Cesar!5e0!3m2!1ses-419!2sco!4v1623211051841!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-12 text-center col-md-6">
                <p class="infoUbicacion">
                    Visita nuestra tienda y conoce el mejor vino <br> que tu paladar podrá degustar.<br>
                    Ideal para acompañar comidas especiales <br>y hacerlas inolvidables.
                </p>
                <p class="infoUbicacion"><i class="fas fa-map-marker-alt"></i> Nos encontramos ubicados en Becerril-Cesar.</p>
            </div>
            <div class="col-12 col-md-6 pc">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7865.383826774971!2d-73.278949!3d9.707314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6071d53b50884b%3A0xc931535295c25938!2sCl.%204%2C%20Becerril%2C%20Cesar!5e0!3m2!1ses-419!2sco!4v1623211051841!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
