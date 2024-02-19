<form action="{{route('CATALOGO.storedos')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">id</label>
        <input type="text" name="id" placeholder="Ingresa el id del producto">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre del producto">
    </div>
    <div>
        <label for="">Color</label>
        <input type="text" name="color" placeholder="Ingresa el color del producto">
    </div>
    <div>
        <label for="">Categoria</label>
        <input type="text" name="categoria" placeholder="Ingresa la categoria del producto">
    </div>
    <div>
        <label for="">Material</label>
        <input type="text" name="material" placeholder="Ingresa el Material del producto">
    </div>
    <div>
        <label for="">Descripcion</label>
        <textarea type="text" name="descripcion" placeholder="Ingresa la descripcion del producto"></textarea>
    </div>
    <div>
        <label for="">Inforamación Adicional</label>
        <textarea type="text" name="infoadicional" placeholder="Ingresa la Información Adicional del producto"></textarea>
    </div>
    <div>
        <label for="">imguno</label>
        <input type="file" class="custom-file-input" name="imguno" placeholder="imguno">
    </div>
    <div>
        <label for="">imgdos</label>
        <input type="file" name="imgdos" placeholder="imgdos">
    </div>
    <div>
        <label for="">imgtres</label>
        <input type="file" name="imgtres" placeholder="imgtres">
    </div>
    <div>
        <label for="">imgcuatro</label>
        <input type="file" name="imgcuatro" placeholder="imgcuatro">
    </div>
    <div>
        <label for="">imgcinco</label>
        <input type="file" name="imgcinco" placeholder="imgcinco">
    </div>
    <div>
        <label for="">imgseis</label>
        <input type="file" name="imgseis" placeholder="imgseis">
    </div>
    <div>
        <label for="">imgsiete</label>
        <input type="file" name="imgsiete" placeholder="imgsiete">
    </div>
    <div>
        <label for="">imgocho</label>
        <input type="file" name="imgocho" placeholder="imgocho">
    </div>
    <div>
        <label for="">imgnueve</label>
        <input type="file" name="imgnueve" placeholder="imgnueve">
    </div>
    <div>
        <label for="">imgdiez</label>
        <input type="file" name="imgdiez" placeholder="imgdiez">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
