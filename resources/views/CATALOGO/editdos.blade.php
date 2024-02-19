<form action="{{route('CATALOGO.updatedos', $editardos->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="">id</label>
        <input type="text" name="id" placeholder="Ingresa el id del producto" value="{{$editardos->id}}">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto" value="{{$editardos->nombre}}">
    </div>
    <div>
        <label for="">Color</label>
        <input type="text" name="color" placeholder="Ingresa el color del producto" value="{{$editardos->color}}">
    </div>
    <div>
        <label for="">Categoria</label>
        <input type="text" name="categoria" placeholder="Ingresa la categoria del producto" value="{{$editardos->categoria}}">
    </div>
    <div>
        <label for="">Material</label>
        <input type="text" name="material" placeholder="Ingresa el Material del producto" value="{{$editardos->material}}">
    </div>
    <div>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" placeholder="Ingresa la descripcion del producto" value="{{$editardos->descripcion}}">
    </div>
    <div>
        <label for="">Información Adicional</label>
        <input type="text" name="infoadicional" placeholder="Ingresa la Inforamación Adicional del producto" value="{{$editardos->infoadicional}}">
    </div>
    <div>
        <label for="">imguno</label>
        <input type="file" name="imguno" placeholder="imguno" value="{{$editardos->imguno}}">
    </div>
    <div>
        <label for="">imgdos</label>
        <input type="file" name="imgdos" placeholder="imgdos" value="{{$editardos->imgdos}}">
    </div>
    <div>
        <label for="">imgtres</label>
        <input type="file" name="imgtres" placeholder="imgtres" value="{{$editardos->imgtres}}">
    </div>
    <div>
        <label for="">imgcuatro</label>
        <input type="file" name="imgcuatro" placeholder="imgcuatro" value="{{$editardos->imgcuatro}}">
    </div>
    <div>
        <label for="">imgcinco</label>
        <input type="file" name="imgcinco" placeholder="imgcinco" value="{{$editardos->imgcinco}}">
    </div>
    <div>
        <label for="">imgseis</label>
        <input type="file" name="imgseis" placeholder="imgseis" value="{{$editardos->imgseis}}">
    </div>
    <div>
        <label for="">imgsiete</label>
        <input type="file" name="imgsiete" placeholder="imgsiete" value="{{$editardos->imgsiete}}">
    </div>
    <div>
        <label for="">imgocho</label>
        <input type="file" name="imgocho" placeholder="imgocho" value="{{$editardos->imgocho}}">
    </div>
    <div>
        <label for="">imgnueve</label>
        <input type="file" name="imgnueve" placeholder="imgnueve" value="{{$editardos->imgnueve}}">
    </div>
    <div>
        <label for="">imgdiez</label>
        <input type="file" name="imgdiez" placeholder="imgdiez" value="{{$editardos->imgdiez}}">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>