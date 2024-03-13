@extends('PLANTILLA.template')
@section('contenido')
<hr>
<a href="{{route('CATALOGO.createdos')}}" class="btn btn-primary">Crear</a>
<hr>
<table class="table">
    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Color</th>
        <th>Material</th>
        <th>Descripcion</th>
        <th>Información Adicional</th>
        <th>imguno</th>
        <th>imgdos</th>
        <th>imgtres</th>
        <th>imgcuatro</th>
        <th>imgcinco</th>
        <th>imgseis</th>
        <th>imgsiete</th>
        <th>imgocho</th>
        <th>imgnueve</th>
        <th>imgdiez</th>
    </thead>
    <tbody>
        @foreach ($catalogo as $catalogos)
            <tr>
                <td>{{$catalogos->id}}</td>
                <td>{{$catalogos->nombre}}</td>
                <td>{{$catalogos->categoria}}</td>
                <td>{{$catalogos->color}}</td>
                <td>{{$catalogos->material}}</td>
                <td class="textocortado">{{$catalogos->descripcion}}</td>
                <td class="textocortado">{{$catalogos->infoadicional}}</td>
                <td>{{$catalogos->imguno}}</td>
                <td>{{$catalogos->imgdos}}</td>
                <td>{{$catalogos->imgtres}}</td>
                <td>{{$catalogos->imgcuatro}}</td>
                <td>{{$catalogos->imgcinco}}</td>
                <td>{{$catalogos->imgseis}}</td>
                <td>{{$catalogos->imgsiete}}</td>
                <td>{{$catalogos->imgocho}}</td>
                <td>{{$catalogos->imgnueve}}</td>
                <td>{{$catalogos->imgdiez}}</td>
                <td class="btn-group">
                    <a href="{{route('CATALOGO.editdos', $catalogos->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('CATALOGO.destroydos', $catalogos->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <td colspan="4"> {{$catalogo->links()}}</td>
    </tfoot>
</table>

<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {
      function cortarTexto(texto) {
          var maxPalabras = 13;
          var palabras = texto.split(" ");
          if (palabras.length > maxPalabras) {
              return palabras.slice(0, maxPalabras).join(" ") + "...";
          } else {
              return texto;
          }
      }

      $('.textocortado').each(function() {
          var texto = $(this).text();
          var textoCortado = cortarTexto(texto);
          $(this).text(textoCortado);
      });
    }); 
</script>

@endsection