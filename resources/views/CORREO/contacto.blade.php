<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  </head>

<body style="background-color: #141722; color: white; display: flex; align-items: center; justify-content: center;">
    <div style="background-color: #141722; margin: auto;">
        <h2 style="text-align: center; color:white;margin-top:5vh;">HOLA! ALGUIEN NOS HA CONTACTADO <br> TE DEJO SUS DATOS</h2>
        <h4 style="color: white">Nombre: {{$nombre}}</h4>
        <h4 style="color: white">Correo: {{$email}}</h4>
        <h4 style="color: white">Telefono: {{$celular}}</h4>
        <h4 style="color: white">Mensaje: {{$mensaje}}</h4>
        <h3 style="color: white;margin-top:3vh;margin-bottom:5vh;">Porfavor Contactalo y no olvides darle seguimiento</h3>
    </div>    
</body>