<style>
    table, th, td{
        border: 1px solid black;
    }
</style>

<a href="{{route('CATALOGO.createdos')}}">Crear</a>
<table>
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
                <td>{{$catalogos->descripcion}}</td>
                <td>{{$catalogos->infoadicional}}</td>
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
                <td>
                    <a href="{{route('CATALOGO.editdos', $catalogos->id)}}">Editar</a>
                    <form action="{{route('CATALOGO.destroydos', $catalogos->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>