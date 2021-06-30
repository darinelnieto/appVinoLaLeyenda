<div class="headerAdminiUser">
    <div class="contenFormu">
        <form action="" class="formSearch">
            <input type="search" name="name" class="searchUser" placeholder="Nombre del producto...">
            <button type="submit" class="btnSearch"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="modalAddMore">
        <a href="" type="button" class="AddMoreUserModal" data-toggle="modal" data-target="#modalNewUser"><i class="fas fa-user-plus"></i></a>
    </div>
</div>
<!-- modal formulario -->
<div class="modal" id="modalNewUser">
    <div class="modal-dialog">
        <div class="modal-content contenform">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
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
<!-- end modal formulario -->
@if (Session::has('error'))
    @include('adiminstrador.plantilla.errorRegister')
@endif
@if (Session::has('exito'))
    <div id="mensajeExito"><p>{{ Session::get('exito') }}</p></div>
@endif
<div class="bodyUser mt-3">
    <table>
        <thead>
            <tr>
                <td class="TH"><p>Nombre</p></td>
                <td class="TH"><p>Email</p></td>
                <td class="TH"><p>Teléfono</p></td>
                <td class="TH"><p>Rol</p></td>
                <td class="TH"><p>Contraseña</p></td>
                <td class="TH"><p>Estado</p></td>
                <td class="TH"></td>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td class="nombreDB"><p>{{$usuario->name}}</p></td>
                    <td class="email"><p>{{$usuario->email}}</p></td>
                    <td class="telefono"><p>{{$usuario->phone}}</p></td>
                    <td class="rol"><p>{{$usuario->rol}}</p></td>
                    <td class="password"><p class="pPassword">{{$usuario->password}}</p></td>
                    <td class="estado"><p>{{$usuario->state}}</p></td>
                    <td class="botones">
                        <div class="botonesAdminUser">
                            <button type="button" class="edita" data-toggle="modal" data-target="#modal{{$usuario->id}}"><i class="fas fa-pencil-alt"></i></button>
                            @include('adiminstrador.plantilla.estado')
                        </div>
                    </td>
                </tr>
                <div class="modal" id="modal{{$usuario->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content contenform">
                            <div class="modal-body">
                                @include('adiminstrador.plantilla.editar')
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    {{$usuarios->links()}}
</div>