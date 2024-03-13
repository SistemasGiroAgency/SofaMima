@extends('PLANTILLA.template')
@section('contenido')
<form action="{{route('CATALOGO.updatedos', $editardos->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="">id</label>
        <input type="text" name="id" placeholder="Ingresa el id del producto" value="{{$editardos->id}}" class="form-control">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto" value="{{$editardos->nombre}}" class="form-control">
    </div>
    <div>
        <label for="">Color</label>
        <input type="text" name="color" placeholder="Ingresa el color del producto" value="{{$editardos->color}}" class="form-control">
    </div>
    <div>
        <label for="">Categoria</label>
        <input type="text" name="categoria" placeholder="Ingresa la categoria del producto" value="{{$editardos->categoria}}" class="form-control">
    </div>
    <div>
        <label for="">Material</label>
        <input type="text" name="material" placeholder="Ingresa el Material del producto" value="{{$editardos->material}}" class="form-control">
    </div>
    <div>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" placeholder="Ingresa la descripcion del producto" value="{{$editardos->descripcion}}" class="form-control">
    </div>
    <div>
        <label for="">Información Adicional</label>
        <input type="text" name="infoadicional" placeholder="Ingresa la Inforamación Adicional del producto" value="{{$editardos->infoadicional}}" class="form-control">
    </div>
    <h3>Imagenes con medida de 351X411</h3>
    <div>
        <label for="">imguno</label>
        <input type="file" name="imguno" placeholder="imguno" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imguno}}">
    </div>
    <div>
        <label for="">imgdos</label>
        <input type="file" name="imgdos" placeholder="imgdos" value="{{$editardos->imgdos}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgdos}}">
    </div>
    <div>
        <label for="">imgtres</label>
        <input type="file" name="imgtres" placeholder="imgtres" value="{{$editardos->imgtres}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgtres}}">
    </div>
    <div>
        <label for="">imgcuatro</label>
        <input type="file" name="imgcuatro" placeholder="imgcuatro" value="{{$editardos->imgcuatro}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgcuatro}}">
    </div>
    <div>
        <label for="">imgcinco</label>
        <input type="file" name="imgcinco" placeholder="imgcinco" value="{{$editardos->imgcinco}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgcinco}}">
    </div>
    <h3>Imagenes con medida de 1280X1496</h3>
    <div>
        <label for="">imgseis</label>
        <input type="file" name="imgseis" placeholder="imgseis" value="{{$editardos->imgseis}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgseis}}">
    </div>
    <div>
        <label for="">imgsiete</label>
        <input type="file" name="imgsiete" placeholder="imgsiete" value="{{$editardos->imgsiete}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgsiete}}">
    </div>
    <div>
        <label for="">imgocho</label>
        <input type="file" name="imgocho" placeholder="imgocho" value="{{$editardos->imgocho}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgocho}}">
    </div>
    <div>
        <label for="">imgnueve</label>
        <input type="file" name="imgnueve" placeholder="imgnueve" value="{{$editardos->imgnueve}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgnueve}}">
    </div>
    <div>
        <label for="">imgdiez</label>
        <input type="file" name="imgdiez" placeholder="imgdiez" value="{{$editardos->imgdiez}}" class="form-control">
        <input type="hidden" name="img_actual" value="{{$editardos->imgdiez}}">
    </div>
    <div>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>
</form>
@endsection