<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
    <form action="{{route('CRUD.update', $edit->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">ID</label>
            <input type="text" name="id" placeholder="Numero de la nota" value="{{$edit->id}}">
        </div>
        <div>
            <label for="">Titulo</label>
            <input type="text" name="titulo" placeholder="titulo de la nota" value="{{$edit->titulo}}">
        </div>
        <div>
            <label for="">Fecha</label>
            <input type="text" name="fecha" placeholder="fecha" value="{{$edit->fecha}}">
        </div>
        <div>
            <label for="">textouno</label>
            <textarea name="textouno" placeholder="textouno">{{$edit->textouno}}</textarea>
        </div>
        <div>
            <label for="">textodos</label>
            <textarea name="textodos" placeholder="textodos">{{$edit->textodos}}</textarea>
        </div>
        <div>
            <label for="">textotres</label>
            <textarea name="textotres" placeholder="textotres">{{$edit->textotres}}</textarea>
        </div>
        <div>
            <label for="">textocuatro</label>
            <textarea name="textocuatro" placeholder="textocuatro">{{$edit->textocuatro}}</textarea>
        </div>
        <div>
            <label for="">textocinco</label>
            <textarea name="textocinco" placeholder="textocinco">{{$edit->textocinco}}</textarea>
        </div>
        <div>
            <label for="">textoseis</label>
            <textarea name="textoseis" placeholder="textoseis">{{$edit->textoseis}}</textarea>
        </div>
        <div>
            <label for="">textosiete</label>
            <textarea name="textosiete" placeholder="textosiete">{{$edit->textosiete}}</textarea>
        </div>
        <div>
            <label for="">imguno</label>
            <input type="file" name="imguno" placeholder="imguno" value="{{$edit->imguno}}">
        </div>
        <div>
            <label for="">imgdos</label>
            <input type="file" name="imgdos" placeholder="imgdos" value="{{$edit->imgdos}}">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <script>
        $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100,
          width: 1000
        });
    </script>

</body>
  