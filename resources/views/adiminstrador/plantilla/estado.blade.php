<form action="{{route('state')}}" method="post">
    @csrf
    @method('post')
    <input type="hidden" name="id" value="{{ $usuario->id }}">
    <input type="hidden" name="state" value="Inactivo">
    <button type="submit" class="elimina"><i class="far fa-trash-alt"></i></button>
</form>