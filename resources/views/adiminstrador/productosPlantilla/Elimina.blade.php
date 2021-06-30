<form action="{{route('product.elimina')}}" method="post">
    @csrf
    @method('post')
    <input type="hidden" name="id" value="{{$producto->id}}">
    <button type="submit" class="elimina"><i class="far fa-trash-alt"></i></button>
</form>