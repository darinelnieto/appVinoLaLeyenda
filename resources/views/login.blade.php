<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Login app</title>
</head>
<body>
<section class="fondoLogin">
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-3 mt-4">
                    <a href="/" class="linkBack"><i class="fas fa-arrow-left"></i> Atras</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-4 text-center contenForm">
                    <img src="{{asset('img/logo-vino-03.png')}}" alt="Logo vino la leyenda" class="logoLogin">
                    <form action="{{route('validacion')}}" method="POST" id="login" class="mb-5">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Tu email" class="usuarioLogin">
                            @error('email')
                                <p class="infoLoginFom"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="paswordLogin" placeholder="Tu contraseña">
                            @error('password')
                                <p class="infoLoginFom"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Ingresar" class="inputLogin">
                        </div>
                    </form>
                    <p class="infoLoginFom">Tus datos están seguros con Vino La Leyenda.</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>