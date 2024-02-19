<a href="{{route('CRUD.create')}}">Crear</a>
<table>
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>color</th>
        <th>categoria</th>
        <th>textouno</th>
        <th>textodos</th>
        <th>textotres</th>
        <th>textocuatro</th>
        <th>textocinco</th>
        <th>textoseis</th>
        <th>textosiete</th>
        <th>imguno</th>
        <th>imgdos</th>
    </thead>
    <tbody>
        @foreach ($producto as $productos)
            <tr>
                <td>{{$productos->id}}</td>
                <td>{{$productos->titulo}}</td>
                <td>{{$productos->fecha}}</td>
                <td>{{$productos->textouno}}</td>
                <td>{{$productos->textodos}}</td>
                <td>{{$productos->textotres}}</td>
                <td>{{$productos->textocuatro}}</td>
                <td>{{$productos->textocinco}}</td>
                <td>{{$productos->textoseis}}</td>
                <td>{{$productos->textosiete}}</td>
                <td>{{$productos->imguno}}</td>
                <td>{{$productos->imgdos}}</td>
                <td>
                    <a href="{{ route('CRUD.edit', $productos->id) }}">Editar</a>
                    <form action="{{route('CRUD.destroy', $productos->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    table, th, td{
        border: 1px solid black;
    }
</style>