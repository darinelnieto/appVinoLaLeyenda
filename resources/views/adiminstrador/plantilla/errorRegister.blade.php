<div id="modalMensaje">
    <div class="modal-dialog">
        <div class="modal-content contenform">
            <div class="modal-body">
                <div id="mensajeErrorDos"><p>{{ Session::get('error') }}</p></div>
                <div class="text-right mb-3"><a href="" class="closeForm">X</a></div>
                <form action="{{route('user.nuevo')}}" method="post" class="formRegistro">
                    @csrf
                    @method('post')
                    <div class="form-group mb-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Nombre...">
                    </div>
                    <div class="form-group mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Email...">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input type="tel" name="phone" id="phone" class="form-control" pattern="([0-6]{3})([0-9]{7})" title="Este campo es para números de telefono de 10 digitos sin espacios ni simbolos" placeholder="Teléfono..." require>
                    </div>
                    <div class="form-group mb-4">
                        <select name="rol" id="" require class="selectRegistre">
                            <option value="">Seleccione rol</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Vendedor Tienda">Vendedor Tienda</option>
                            <option value="Vendedor Redes Sociales">Vendedor Redes Sociales</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <select name="state" id="" require class="selectRegistre">
                            <option value="">Seleccione estado</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" value="Enviar" class="botinRegistro">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>