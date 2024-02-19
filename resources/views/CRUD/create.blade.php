<form action="{{route('CRUD.store')}}" method="POST">
    @csrf
    <div>
        <label for="">ID</label>
        <input type="text" name="id" placeholder="Numero de la nota">
    </div>
    <div>
        <label for="">titulo</label>
        <input type="text" name="titulo" placeholder="titulo de la nota">
    </div>
    <div>
        <label for="">fecha</label>
        <input type="text" name="fecha" placeholder="fecha">
    </div>
    <div>
        <label for="">textouno</label>
        <input type="text" name="textouno" placeholder="textouno">
    </div>
    <div>
        <label for="">textodos</label>
        <input type="text" name="textodos" placeholder="textodos">
    </div>
    <div>
        <label for="">textotres</label>
        <input type="text" name="textotres" placeholder="textotres">
    </div>
    <div>
        <label for="">textocuatro</label>
        <input type="text" name="textocuatro" placeholder="textocuatro">
    </div>
    <div>
        <label for="">textocinco</label>
        <input type="text" name="textocinco" placeholder="textocinco">
    </div>
    <div>
        <label for="">textoseis</label>
        <input type="text" name="textoseis" placeholder="textoseis">
    </div>
    <div>
        <label for="">textosiete</label>
        <input type="text" name="textosiete" placeholder="textosiete">
    </div>
    <div>
        <label for="">imguno</label>
        <input type="file" name="imguno" placeholder="imguno">
    </div>
    <div>
        <label for="">imgdos</label>
        <input type="file" name="imgdos" placeholder="imgdos">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>