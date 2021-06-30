<form action="{{route('editado')}}" method="post" class="formRegistro">
    @csrf
    @method('post')
    <div class="form-group mb-4">
    <input type="hidden" name="id" value="{{ $usuario->id }}">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $usuario->name }}" required autocomplete="name" autofocus placeholder="Nombre...">
    </div>
    <div class="form-group mb-4">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario->email }}" required autocomplete="email" placeholder="Email...">
    </div>
    <div class="form-group mb-4">
        <input type="tel" name="phone" id="phone" class="form-control" pattern="([1-3]{3})([0-9]{7})" title="Este campo es para números de telefono de 10 digitos sin espacios ni simbolos" value="{{ $usuario->phone }}" placeholder="Teléfono..." require>
    </div>
    <div class="form-group mb-4">
        <select name="rol" id="" require class="selectRegistre" value="{{ $usuario->rol }}">
            <option value="{{ $usuario->rol }}">{{ $usuario->rol }}</option>
            <option value="Administrador">Administrador</option>
            <option value="Vendedor Tienda">Vendedor Tienda</option>
            <option value="Vendedor Redes Sociales">Vendedor Redes Sociales</option>
        </select>
    </div>
    <div class="form-group mb-4">
        <select name="state" id="" require class="selectRegistre" value="{{ $usuario->state }}">
            <option value="{{ $usuario->state }}">{{ $usuario->state }}</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
    </div>
    <div class="form-group mb-4">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="" placeholder="Ingrese nueva contraseña">
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