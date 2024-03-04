<!DOCTYPE html>
<html lang="en">
<head>
  <title>SofaMima - HOME</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <meta name="description" content="Bootstrap 5 Furniture Shop HTML CSS Template">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<style>
  .roboto-bold {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    font-style: normal;
  }

  .nav-link{
    color: white;
  }

  .nav-link:hover{
    color: white;
  }

  .nav-linkblanco{
    color: white
  }

  .btn-mio{
    border-color: #141722;
    color: #141722;
    transition: 0.5s !important
  }

  .btn-mio:hover{
    color: white;
    background-color: #141722;
    border-color: #141722;
  }

  .palabrasmain{
    text-align: center;
    position: relative; 
    bottom: 15vh;
  }

  .palabrasmain h2{
    color: #141722;
    font-size: 6vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .palabrasmain p{
    color: #141722;
  }

  .imglogo{
    background: url('images/logosofamima.svg') center center/contain no-repeat;
    width: 177px;
    height: 45px;
    transition: 0.6s ease-out;
  }

  .menuburg{
    background: url('images/menu-hamburguesa.png') center center/contain no-repeat;
    width: 30px;
    height: 30px;
    transition: 0.6s ease-out;
  }

  .menuburgblanco{
    background: url('images/menu-hamburguesablanco.png') center center/contain no-repeat;
    width: 30px;
    height: 30px;
  }

  .navbar-togglerdos{
    border-color: white;
    transition: 0.6s ease-out;
  }

  .closenav{
   background: url('images/cruz-pequena.png') center center/contain no-repeat;
   height: 32px; 
   width: 32px;
  }

  .closenavblanco{
   background: url('images/cruz-pequenablanco.png') center center/contain no-repeat;
   height: 32px; 
   width: 32px;
  }

  .offcanvasnegro{
    background-color: black !important; 
  }

  .offcanvas-titleblanco{
    color: white;
  }

  .titulo{
    font-size: 5vh;
    margin-top: 4vh;
    margin-bottom: 2vh;
  }
  
  .forms{
    margin: 2vw;
    padding: 3vh;
  }

  .testimonial-swiper .testimonial-item blockquote p{
    font-size: 2.7vh;
    width: 83.33333333%;
    margin: auto;
  }

  @media only screen and (max-width: 992px){
    .palabrasmain{
      text-align: initial;
      position: static; 
    }
  }
</style>

<body class="homepage">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="dribble" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M4.839 1.024c3.346 4.041 5.096 7.922 5.704 12.782M.533 6.82c5.985-.138 9.402-1.083 11.97-4.216M2.7 12.594c3.221-4.902 7.171-5.65 11.755-4.293M14.5 7.5a7 7 0 1 0-14 0a7 7 0 0 0 14 0Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="20" height="18" x="2" y="4" rx="4"/><path d="M8 2v4m8-4v4M2 10h20"/></g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-bag" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10Z"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5"/></g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="18" height="14" x="3" y="8" rx="2"/><path d="M12 5a3 3 0 1 0-3 3m6 0a3 3 0 1 0-3-3m0 0v17m9-7H3"/></g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-cycle" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M22 12c0 6-4.39 10-9.806 10C7.792 22 4.24 19.665 3 16m-1-4C2 6 6.39 2 11.806 2C16.209 2 19.76 4.335 21 8"/><path d="m7 17l-4-1l-1 4M17 7l4 1l1-4"/></g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor" d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 24 24">
        <path fill="currentColor" d="M17 11H9.41l3.3-3.29a1 1 0 1 0-1.42-1.42l-5 5a1 1 0 0 0-.21.33a1 1 0 0 0 0 .76a1 1 0 0 0 .21.33l5 5a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42L9.41 13H17a1 1 0 0 0 0-2Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
        <g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M5.669 4.76a1.469 1.469 0 0 1 2.04-1.177c1.062.454 3.442 1.533 6.462 3.276c3.021 1.744 5.146 3.267 6.069 3.958c.788.591.79 1.763.001 2.356c-.914.687-3.013 2.19-6.07 3.956c-3.06 1.766-5.412 2.832-6.464 3.28c-.906.387-1.92-.2-2.038-1.177c-.138-1.142-.396-3.735-.396-7.237c0-3.5.257-6.092.396-7.235Z"/></g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor" d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor" d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
      </symbol>
    </defs>
  </svg>

  <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div>

  <nav class="navbar navbar-expand-lg navbar-light text-uppercase fs-6 p-3 border-bottom border-light align-items-center fixed-top border-opacity-10" style="background-color:black">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><div class="imglogo"></div></a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: transparent;border:none;"><div class="closenav"></div></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="/">Página Principal</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section>
    <div class="container-fluid" style="padding-left: 0">
        <div class="row">
            <div class="col-lg-8 col-12 p-0">
              <div class="slideshow slide-in arrow-absolute" style="height: 100vh;">
                <div class="swiper-wrapper">
                  <div class="swiper-slide d-flex align-items-center jarallax">
                    <img src="{{asset('images/Slider 1.jpg')}}" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                      <div class="container" style="max-width: fit-content">
                        <div class="row align-items-center justify-content-center">
                          <div class="col-md-10 offset-md-1 palabrasmain" style="margin: auto;">
                            <div class="d-flex align-items-center justify-content-center mt-5 pt-5"><h2 class="roboto-bold text-uppercase txt-fx slide-up responsiveh2">Elegancia Duradera</h2></div>
                            <p class="caption responsivep">Combina tendencias contemporáneas con la resistencia del tiempo, asegurando que cada pieza sea tan atemporal como sofisticada.</p>
                            <a href="/3/singleproducts" class="btn btn-mio text-uppercase rounded-3 px-4 py-3">Adquierela hoy</a>
                          </div>
                        </div>
                        <div class="row d-flex align-items-end justify-content-initial">
                          <div class="col-4" style="position: relative; top:25vh; left:2vw;">
                            <h2 class="roboto-bold text-uppercase txt-fx slide-up">Sala Modulos</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide d-flex align-items-center jarallax">
                    <img src="{{asset('images/Slider 2.jpg')}}" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-10 offset-md-1 palabrasmain">
                            <div class="d-flex align-items-center justify-content-center mt-5 pt-5"><h2 class="roboto-bold text-uppercase txt-fx slide-up responsiveh2"><div>Confort en cada detalle</div></h2></div>
                            <p class="caption responsivep">Selección meticulosa de materiales de alta calidad, diseño enfocado en el confort, <br> para una experiencia de lujo.</p>
                            <a href="/1/singleproducts" class="btn btn-mio text-uppercase rounded-3 px-4 py-3">Adquierela hoy</a>
                          </div>
                        </div>
                        <div class="row d-flex align-items-end justify-content-initial">
                          <div class="col-4" style="position: relative; top:25vh; left:2vw;">
                            <h2 class="roboto-bold text-uppercase txt-fx slide-up">Sala Córdoba</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide d-flex align-items-center jarallax">
                    <img src="{{asset('images/Slider 3.jpg')}}" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-10 offset-md-1 palabrasmain">
                            <div class="d-flex align-items-center justify-content-center mt-5 pt-5"><h2 class="roboto-bold text-uppercase txt-fx slide-up responsiveh2"><div>Diseños Únicos</div></h2></div>
                            <p class="caption responsivep">Cada proyecto es una obra de arte, <br> diseñado para crear espacios únicos y reflejar tu personalidad.</p>
                            <a href="/5/singleproducts" class="btn btn-mio text-uppercase rounded-3 px-4 py-3">Adquierela hoy</a>
                          </div>
                        </div>
                        <div class="row d-flex align-items-end justify-content-initial">
                          <div class="col-4" style="position: relative; top:25vh; left:2vw;">
                            <h2 class="roboto-bold text-uppercase txt-fx slide-up" style="color: white">Sala Torreón</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination" style="width: 66.66666667%;"></div>
              </div>
            </div>
            <div class="col-lg-4 col-12 d-flex align-items-center justify-content-center" style="padding-left: 2vw; padding-right:2vw;">
                <div class="inquiry-item col-md-12 forms">
                    <h2><b>Hablemos de Elegancia</b></h2>
                    <p>Contacta con nosotros y da el primer paso para crear el espacio de tus sueños.</p>
                    <form action="{{url('correolanding')}}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="form-input col-lg-12 d-flex mb-3">
                          <input type="text" name="nombre" placeholder="Nombre" class="form-control ps-3 me-3" required>
                          <input type="text" name="email" placeholder="Email" class="form-control ps-3" required>
                        </div>
                        <div class="col-lg-12 mb-3">
                          <input type="text" name="celular" placeholder="Celular" class="form-control ps-3" required>
                        </div>
                        <div class="col-lg-12 mb-3">
                          <textarea name="mensaje" placeholder="Mensaje" class="form-control ps-3" rows="8" required></textarea>
                        </div>
                        <div class="d-grid">
                          <button class="btn btn-lg text-uppercase btn-rounded-none" style="background-color: #141722;color:white;">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="categories overflow-hidden" style="margin-top: 1rem;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center">
          <div>
          	<h4 class="titulo fw-bold">Propuesta de valor Sófa Mima</h4>
            <p class="testimonial-item text-black">Confort y diseño que transforman tu espacio. Cada pieza, una obra de arte en ergonomía y estilo, creada para elevar cada instante de tu vida en casa. Experimenta la exclusividad y la durabilidad que mereces, con un servicio personalizado que entiende tu visión. Tu hogar, nuestro compromiso. <br><br> Confort Innovador: A través de la innovación continua, nuestros sofás y muebles combinan diseño ergonómico con tecnología de punta para ofrecer un confort inigualable y una experiencia de descanso superior. <br><br> Experiencia de Compra Excepcional: Desde la navegación en nuestro sitio web hasta la entrega e instalación, garantizamos una experiencia de compra sin complicaciones. Nuestro equipo de atención al cliente está siempre disponible para asistirte. <br><br> Garantía de Satisfacción: Confiamos tanto en la calidad de nuestros productos que ofrecemos una garantía de satisfacción. Si no estás completamente satisfecho, nos comprometemos a encontrar una solución. <br><br> Innovación y Diseño: Nos mantenemos a la vanguardia en tendencias de diseño de interiores, ofreciendo colecciones que reflejan los estilos más actuales y deseables.</p>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-md-6">
              <div class="jarallax position-relative mb-4" style="height:400px;">
                <img src="images/Salas.webp" alt="categories" class="jarallax-img img-fluid">
                <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                  <h4 class="section-title text-white"><b>Salas</b></h4>
                  <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="jarallax position-relative mb-3" style="height:400px;">
                <img src="images/Sofa.webp" alt="categories" class="jarallax-img img-fluid">
                <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                  <h4 class="section-title text-white"><b>Sofás</b></h4>
                  <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="jarallax position-relative mb-3" style="height:400px;">
                <img src="images/Comedores.webp" alt="categories" class="jarallax-img img-fluid">
                <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                  <h4 class="section-title text-white"><b>Comedores</b></h4>
                  <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="jarallax position-relative mb-3" style="height:400px;">
                <img src="images/Sillones.jpg" alt="categories" class="jarallax-img img-fluid">
                <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                  <h4 class="section-title text-white"><b>Sillones</b></h4>
                  <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="razones" style="background-color:#141722;">
    <div class="container">
      <div class="row justify-content-center responiiverazones">
        <div class="col-md-6 text-center">
          <h2 class="titulo text-white fw-bold">Reseñas</h2>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="swiper testimonial-swiper text-white overflow-hidden" style="margin-bottom: 0 !important;">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="testimonial-item text-center">
              <blockquote>
                <p>"Increíble calidad en la sala 'Torreón'. Los bordados son un detalle encantador y la tela es tan resistente como elegante. ¡Es el centro de atención en mi sala de estar!"</p>
                <div class="review-title text-uppercase">Reseña de "Sala Torreón" por Sofía R.</div>
              </blockquote>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item text-center">
              <blockquote>
                <p>"El comedor 'Viena' superó todas mis expectativas. La madera es robusta y el acabado impecable. Las sillas son bastante cómodas."</p>
                <div class="review-title text-uppercase">Reseña de "Comedor Viena" por Carlos M.</div>
              </blockquote>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item text-center">
              <blockquote>
                <p>"La sala 'Toronto' es la definición de comodidad y estilo. Las patas son sólidas y estables, y la tela es suave al tacto. ¡Ha transformado completamente el ambiente de mi hogar!"”</p>
                <div class="review-title text-uppercase">Reseña de "Sala Toronto" por Ana G.</div>
              </blockquote>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item text-center">
              <blockquote>
                <p>"Me enamoré de la sala 'Córdoba' desde el momento en que la vi. La calidad del sillón es notable, especialmente en las costuras y el soporte."</p>
                <div class="review-title text-uppercase">Reseña de "Sala Córdoba" por Luis E.</div>
              </blockquote>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item text-center">
              <blockquote>
                <p>"La sala 'Módulos' es versátil y moderna. Perfecta para mi espacio limitado, y la calidad es evidente en cada detalle. ¡Es una compra que definitivamente volvería a hacer!"</p>
                <div class="review-title text-uppercase">Reseña de "Sala Módulos" por María P.</div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-swiper-pagination d-flex justify-content-center pb-4 mt-4"></div>
    </div>
  </section>
  
  <footer id="footer" class="bg-black border-top" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-12 col-sm-12">
          <div class="footer-menu footer-menu-004 border-animation-left" style="text-align:center">
            <h5 class="widget-title mb-4">Contáctanos</h5>
            <p>¿Tienes alguna pregunta o sugerencia? <a href="mailto:hola@sofamima.com" class="item-anchor">hola@sofamima.com</a></p>
            <p>¿Necesitas ayuda? <br> <a href="tel:+52 (81) 2428 2187" class="item-anchor">+52 (81) 2428 2187</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 d-flex flex-wrap">
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="https://www.facebook.com/Mueblesmima/" class="text-secondary">
                    <img width="24" height="24" viewBox="0 0 24 24" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik0yNCAxMi4wNzNjMCA1Ljk4OS00LjM5NCAxMC45NTQtMTAuMTMgMTEuODU1di04LjM2M2gyLjc4OWwuNTMxLTMuNDZoLTMuMzJWOS44NmMwLS45NDcuNDY0LTEuODY5IDEuOTUtMS44NjloMS41MDlWNS4wNDVzLTEuMzctLjIzNC0yLjY3OS0uMjM0Yy0yLjczNCAwLTQuNTIgMS42NTctNC41MiA0LjY1NnYyLjYzN0g3LjA5MXYzLjQ2aDMuMDM5djguMzYzQzQuMzk1IDIzLjAyNSAwIDE4LjA2MSAwIDEyLjA3M2MwLTYuNjI3IDUuMzczLTEyIDEyLTEyczEyIDUuMzcyIDEyIDEyeiIgZmlsbD0iIzZjNzU3ZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/sofamima/?hl=es-la" class="text-secondary">
                    <img width="24" height="24" viewBox="0 0 24 24" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik0xMiAyLjE2MmMzLjIwNCAwIDMuNTg0LjAxMiA0Ljg0OS4wNyAxLjMwOC4wNiAyLjY1NS4zNTggMy42MDggMS4zMTEuOTYyLjk2MiAxLjI1MSAyLjI5NiAxLjMxMSAzLjYwOC4wNTggMS4yNjUuMDcgMS42NDUuMDcgNC44NDlzLS4wMTIgMy41ODQtLjA3IDQuODQ5Yy0uMDU5IDEuMzAxLS4zNjQgMi42NjEtMS4zMTEgMy42MDgtLjk2Mi45NjItMi4yOTUgMS4yNTEtMy42MDggMS4zMTEtMS4yNjUuMDU4LTEuNjQ1LjA3LTQuODQ5LjA3cy0zLjU4NC0uMDEyLTQuODQ5LS4wN2MtMS4yOTEtLjA1OS0yLjY2OS0uMzcxLTMuNjA4LTEuMzExLS45NTctLjk1Ny0xLjI1MS0yLjMwNC0xLjMxMS0zLjYwOC0uMDU4LTEuMjY1LS4wNy0xLjY0NS0uMDctNC44NDlzLjAxMi0zLjU4NC4wNy00Ljg0OWMuMDU5LTEuMjk2LjM2Ny0yLjY2NCAxLjMxMS0zLjYwOC45Ni0uOTYgMi4yOTktMS4yNTEgMy42MDgtMS4zMTEgMS4yNjUtLjA1OCAxLjY0NS0uMDcgNC44NDktLjA3TTEyIDBDOC43NDEgMCA4LjMzMi4wMTQgNy4wNTIuMDcyIDUuMTk3LjE1NyAzLjM1NS42NzMgMi4wMTQgMi4wMTQuNjY4IDMuMzYuMTU3IDUuMTk4LjA3MiA3LjA1Mi4wMTQgOC4zMzIgMCA4Ljc0MSAwIDEyYzAgMy4yNTkuMDE0IDMuNjY4LjA3MiA0Ljk0OC4wODUgMS44NTMuNjAzIDMuNyAxLjk0MiA1LjAzOCAxLjM0NSAxLjM0NSAzLjE4NiAxLjg1NyA1LjAzOCAxLjk0MkM4LjMzMiAyMy45ODYgOC43NDEgMjQgMTIgMjRjMy4yNTkgMCAzLjY2OC0uMDE0IDQuOTQ4LS4wNzIgMS44NTQtLjA4NSAzLjY5OC0uNjAyIDUuMDM4LTEuOTQyIDEuMzQ3LTEuMzQ3IDEuODU3LTMuMTg0IDEuOTQyLTUuMDM4LjA1OC0xLjI4LjA3Mi0xLjY4OS4wNzItNC45NDggMC0zLjI1OS0uMDE0LTMuNjY4LS4wNzItNC45NDgtLjA4NS0xLjg1NS0uNjAyLTMuNjk4LTEuOTQyLTUuMDM4QzIwLjY0My42NzEgMTguNzk3LjE1NiAxNi45NDguMDcyIDE1LjY2OC4wMTQgMTUuMjU5IDAgMTIgMHoiIGZpbGw9IiM2Yzc1N2QiIG9wYWNpdHk9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJNMTIgNS44MzhhNi4xNjIgNi4xNjIgMCAxIDAgMCAxMi4zMjQgNi4xNjIgNi4xNjIgMCAwIDAgMC0xMi4zMjR6TTEyIDE2YTQgNCAwIDEgMSAwLTggNCA0IDAgMCAxIDAgOHoiIGZpbGw9IiM2Yzc1N2QiIG9wYWNpdHk9IjEiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48Y2lyY2xlIGN4PSIxOC40MDYiIGN5PSI1LjU5NCIgcj0iMS40NCIgZmlsbD0iIzZjNzU3ZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9jaXJjbGU+PC9nPjwvc3ZnPg==" />
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/@SofaMima" class="text-secondary">
                    <img width="24" height="24" viewBox="0 0 24 24"   src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik0yMy40OTggNi4xODZhMy4wMTYgMy4wMTYgMCAwIDAtMi4xMjItMi4xMzZDMTkuNTA1IDMuNTQ2IDEyIDMuNTQ2IDEyIDMuNTQ2cy03LjUwNSAwLTkuMzc3LjUwNEEzLjAxNSAzLjAxNSAwIDAgMCAuNTAyIDYuMTg2QzAgOC4wNyAwIDEyIDAgMTJzMCAzLjkzLjUwMiA1LjgxNGEzLjAxNiAzLjAxNiAwIDAgMCAyLjEyMiAyLjEzNmMxLjg3MS41MDQgOS4zNzYuNTA0IDkuMzc2LjUwNHM3LjUwNSAwIDkuMzc3LS41MDRhMy4wMTggMy4wMTggMCAwIDAgMi4xMjItMi4xMzZDMjQgMTUuOTMgMjQgMTIgMjQgMTJzMC0zLjkzLS41MDItNS44MTR6TTkuNTQ2IDE1LjU2OVY4LjQzMUwxNS44MTggMTJsLTYuMjcyIDMuNTY5eiIgZmlsbD0iIzZjNzU3ZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                  </a>
                </li>
                <li>
                  <a href="https://www.tiktok.com/@mueblesmima?_t=8kP3vdtLciU&_r=1" class="text-secondary">
                    <img width="24" height="24" viewBox="0 0 24 24" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik0yMi40NjUgOS44NjZhOS44MDkgOS44MDkgMCAwIDEtNS43NC0xLjg0NnY4LjM4NWMwIDQuMTg4LTMuNDA3IDcuNTk0LTcuNTk0IDcuNTk0YTcuNTQ4IDcuNTQ4IDAgMCAxLTQuMzUyLTEuMzc2IDcuNTkgNy41OSAwIDAgMS0zLjI0Mi02LjIxOGMwLTQuMTg4IDMuNDA3LTcuNTk1IDcuNTk1LTcuNTk1LjM0OCAwIC42ODguMDI5IDEuMDIzLjA3NHY0LjIxMmEzLjQyNiAzLjQyNiAwIDAgMC0xLjAyMy0uMTYgMy40NzIgMy40NzIgMCAwIDAtMy40NjggMy40NjkgMy40NyAzLjQ3IDAgMCAwIDMuNDY5IDMuNDY4IDMuNDcgMy40NyAwIDAgMCAzLjQ2Mi0zLjMzOEwxMi41OTggMGg0LjEyNmE1Ljc1MiA1Ljc1MiAwIDAgMCA1Ljc0IDUuNzQxdjQuMTI1eiIgZmlsbD0iIzZjNzU3ZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-start text-md-end">
            <p>© Copyright 2024 Sofa MIMA. Página desarrollada con mucho amor por <a href="http://www.giroagency.com/" target="_blank">Giro Agency</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins.js')}}"></script>
  <script src="{{asset('js/SmoothScroll.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $('.slideshow').each(function(){
      var space = $(this).attr('data-space') ? $(this).attr('data-space') : 0 ;
      var col = $(this).attr('data-col');
      if ( typeof col == "undefined" || !col) {
        col = 1;
      }

      var swiper = new Swiper(".slideshow", {
        autoplay: {
          delay: 4000,
          disableOnInteraction: true,
        },
        slidesPerView: col,
        spaceBetween: space,
        speed: 1000,
        loop: true,
        navigation: {
          nextEl: '.icon-arrow-right',
          prevEl: '.icon-arrow-left',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    });

    $('.autoavance').each(function(){
      var swiper = new Swiper(".autoavance", {
        autoplay: {
          delay: 4000,
        },
        speed: 1000,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    })
  </script>

  @if(Session::has('flash_message_success'))
    <script>
      Swal.fire({
        position: "center",
        icon: "success",
        title: "{!! session('flash_message_success')  !!}",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  @endif
</body>
</html>