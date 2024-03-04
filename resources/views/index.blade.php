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
    color: #141722;
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
    font-size: 8vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .palabrasmain p{
    color: #141722;
  }

  .imglogo{
    background: url('images/logosofamimanegro.svg') center center/contain no-repeat;
    width: 177px;
    height: 45px;
    transition: 0.6s ease-out;
  }
  
  .imglogoblanco{
    background: url('images/logosofamima.png') center center/contain no-repeat;
    width: 177px;
    height: 45px;
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

  .responsivep{
    margin: 0;
  }

  .slide-in .swiper-slide .banner-content .btn{
    transition-delay: 800ms !important;
  }

  .testimonial-swiper .testimonial-item blockquote p{
    width: 91.66666667%;
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

  <nav class="navbar navbar-expand-lg navbar-light text-uppercase fs-6 p-3 border-bottom border-light align-items-center fixed-top border-opacity-10">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><div class="imglogo"></div></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <div class="menuburg"></div>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: transparent;border:none;"><div class="closenav"></div></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/catalogo">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sobrenosotros">Sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Contacto</a>
              <ul class="dropdown-menu list-unstyled border p-3" aria-labelledby="dropdownPages">
                <li>
                  <a href="/contacto" class="dropdown-item item-anchor">Contacto</a>
                </li>
                <li>
                  <a href="/faqs" class="dropdown-item item-anchor">Preguntas F.</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section>
    <div class="slideshow slide-in arrow-absolute" style="height: 100vh;">
      <div class="swiper-wrapper">
        <div class="swiper-slide d-flex align-items-center jarallax">
          <img src="images/Slider 1.jpg" class="jarallax-img" alt="slideshow">
          <div class="banner-content w-100">
            <div class="container" style="max-width: fit-content;">
              <div class="row">
                <div class="col-md-10 offset-md-1 palabrasmain tx-cn">
                  <h2 class="roboto-bold text-uppercase mt-5 pt-5 txt-fx slide-up responsiveh2">Elegancia Duradera</h2>
                  <p class="caption responsivep">Combina tendencias contemporáneas con la resistencia del tiempo, asegurando que cada pieza sea tan atemporal como sofisticada.</p>
                  <a href="/catalogo" class="btn btn-mio text-uppercase rounded-3 px-4 py-3 mt-3">Adquierela hoy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide d-flex align-items-center jarallax">
          <img src="images/Slider 2.jpg" class="jarallax-img" alt="slideshow">
          <div class="banner-content w-100">
            <div class="container">
              <div class="row">
                <div class="col-md-10 offset-md-1 palabrasmain">
                  <h2 class="roboto-bold text-uppercase mt-5 pt-5 txt-fx slide-up responsiveh2">Confort en cada detalle</h2>
                  <p class="caption responsivep">Selección meticulosa de materiales de alta calidad, diseño enfocado en el confort, <br> para una experiencia de lujo.</p>
                  <a href="/catalogo" class="btn btn-mio text-uppercase rounded-3 px-4 py-3 mt-3">Adquierela hoy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide d-flex align-items-center jarallax">
          <img src="images/Slider 3.jpg" class="jarallax-img" alt="slideshow">
          <div class="banner-content w-100">
            <div class="container">
              <div class="row">
                <div class="col-md-10 offset-md-1 palabrasmain">
                  <h2 class="roboto-bold text-uppercase mt-5 pt-5 txt-fx slide-up responsiveh2">Diseños Únicos</h2>
                  <p class="caption responsivep">Cada proyecto es una obra de arte, <br> diseñado para crear espacios únicos y reflejar tu personalidad.</p>
                  <a href="/catalogo" class="btn btn-mio text-uppercase rounded-3 px-4 py-3 mt-3">Adquierela hoy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left text-white"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right text-white"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>

  <section class="categories overflow-hidden" style="margin-top: 1rem;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="jarallax position-relative mb-4" style="height:400px;">
            <img src="images/Salas.webp" alt="categories" class="jarallax-img img-fluid">
            <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
              <h4 class="section-title text-white"><b>Salas</b></h4>
              <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="jarallax position-relative mb-3" style="height:400px;">
            <img src="images/Sofa.webp" alt="categories" class="jarallax-img img-fluid">
            <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
              <h4 class="section-title text-white"><b>Sofás</b></h4>
              <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="jarallax position-relative mb-3" style="height:400px;">
            <img src="images/Comedores.webp" alt="categories" class="jarallax-img img-fluid">
            <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
              <h4 class="section-title text-white"><b>Comedores</b></h4>
              <a href="/catalogo" class="text-white btn-link">Adquiera Hoy</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
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
  </section>

  <section id="new-arrival"
    class="new-arrival py-5">
    <div class="container-fluid">
      <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <h4 class="text-uppercase"><b>Nuevas Tendencias Disponibles</b></h4>
        <a href="shop-sidebar.html" class="btn-link">Sé el Primero en verlo</a>
      </div>

      <div data-aos="fade-in">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5" style="display: flex;align-items:center;justify-content:center;">
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/2/singleproducts">
                  <img src="images/Gary.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/2/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">GARY</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/3/singleproducts">
                  <img src="images/Modulos.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/3/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MODULOS</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/4/singleproducts">
                  <img src="images/Toronto.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/4/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">TORONTO</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/5/singleproducts">
                  <img src="images/Torreon.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/5/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">TORREÓN</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/6/singleproducts">
                  <img src="images/Viena.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/6/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">VIENA</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="razones pt-5" style="background-color:#141722;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 pt-5 text-center">
          <h2 class="text-white display-5 pt-5 my-5 fw-bold responiiverazones">Razones para Elegirnos</h2>
          <p class="text-white">Nos dedicamos a ofrecer lo mejor en cada proyecto tenemos un compromiso latente con la calidad y la satisfacción del cliente.</p>
        </div>
      </div>

      <div class="row mb-5" style="text-align: center;">
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/calidad.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Calidad</b></h5>
                <p class="text-white">Alta gama y durabilidad en cada producto.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/sofa.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Diseño</b></h5>
                <p class="text-white">Estética y funcionabilidad en diseños exclusivos.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/tiempo-de-descanso.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Confort</b></h5>
                <p class="text-white">Muebles ergonómicos para máximo confort.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="900">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/editar.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Personalización</b></h5>
                <p class="text-white">Elige colores y detalles para un estilo único.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/apreton-de-manos.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Confianza</b></h5>
                <p class="text-white">Servicio post-venta para satisfacción completa.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/cliente.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Servicio</b></h5>
                <p class="text-white">Asesoramietno y soporte en tu compra.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/innovacion.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Innovación</b></h5>
                <p class="text-white">Diseño vanguardistas con las últimas tendencias.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-in" data-aos-delay="900">
          <div class="py-5">
            <div class="row g-1">
              <div class="col-md-3">
                <img width="40" height="40" viewBox="0 0 24 24" class="text-dark" src="images/favoritos.svg" alt="" style="pointer-events: none;">
              </div>
              <div class="col-md-9">
                <h5 class="text-white text-capitalize my-1"><b>Exclusividad</b></h5>
                <p class="text-white">Muebles únicos para personalización distintiva.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center pt-5 my-5 responiiverazones">
        <div class="col-md-6 pt-5 text-center">
          <h2 class="text-white display-5 pt-5 fw-bold">Reseñas</h2>
        </div>
      </div>
    
    </div>

    <div class="container-fluid pb-5">
      <div class="swiper testimonial-swiper text-white overflow-hidden my-5 pb-5" style="margin-bottom: 0 !important;">
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
      <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
    </div>
  </section>

  <section id="best-sellers"
    class="best-sellers py-5">
    <div class="container-fluid">
      <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <h4 class="text-uppercase"><b>Otros</b></h4>
        <a href="/catalogo" class="btn-link">Ve Lo Que Todos Quieren</a>
      </div>

      <div data-aos="fade-in">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 d-flex align-items-center justify-content-center">
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/13/singleproducts">
                  <img src="images/Set de mesas de marmol.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/13/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MESAS DE MÁRMOL</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/14/singleproducts">
                  <img src="images/Set Negro de mesas marmol.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/14/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MESAS DE MÁRMOL</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/15/singleproducts">
                  <img src="images/Sillon.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/15/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">SILLÓN</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/9/singleproducts">
                  <img src="images/Recamara.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/9/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">RECÁMARA</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="product-item hover-effect-slide tarjetaresponsive">
              <div class="image-holder position-relative">
                <a href="/12/singleproducts">
                  <img src="images/Mesas Auxiliares.webp" alt="categories" class="product-image img-fluid">
                </a>
                <a href="/12/singleproducts">
                  <div class="btn bg-black w-100 mt-2 rounded-3" style="padding:5px">
                    <span class="text-uppercase fs-5 mt-3" style="color: white;">MESAS AUXILIARES</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faqs py-5 my-5 text-dark">
    <div class="container">
      <div class="row g-5">
        <div class="col-md-7">
          <img src="images/PF imagen.webp" alt="banner image" class="img-fluid">
        </div>
        <div class="col-md-5" style="display: flex;align-items:center;justify-content:center;">
          <div class="row">
            <div class="col-12">
              <h2 class="fw-bold" style="font-size:5vh;">Preguntas Frecuentes</h2>
            </div>
            <div class="col-12">
              <div class="accordion" id="accordionFaqs">
                <div class="accordion-item border-bottom">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse1" aria-expanded="true" aria-controls="accordion-collapse1">
                      ¿Qué hace especiales a las salas de su colección en comparación con otras opciones del mercado?
                    </button>
                  </h2>
                  <div id="accordion-collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      <p>Nuestras salas se distinguen por su calidad superior y diseño único, enfocados en la durabilidad y la comodidad. Cada pieza es creada con atención al detalle, desde la elección de telas hasta la construcción de las estructuras, asegurando que cada sala no solo sea estéticamente atractiva, sino también práctica y duradera para el uso diario.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item border-bottom">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse5" aria-expanded="false" aria-controls="accordion-collapse5">
                      ¿Cómo garantizan la durabilidad de sus sofás?
                    </button>
                  </h2>
                  <div id="accordion-collapse5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      <p>La durabilidad es una prioridad para nosotros. Utilizamos materiales de alta calidad y técnicas de fabricación avanzadas para asegurar que cada sofá resista el paso del tiempo y el uso diario.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item border-bottom">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse2" aria-expanded="false" aria-controls="accordion-collapse2">
                      ¿Ofrecen opciones de personalización para las salas?
                    </button>
                  </h2>
                  <div id="accordion-collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      <p>Sí, ofrecemos personalización en nuestras salas. Puedes elegir entre una variedad de telas, colores y detalles para que tu sala refleje tu estilo personal.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item border-bottom">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse3" aria-expanded="false" aria-controls="accordion-collapse3">
                      ¿Qué tipo de mantenimiento requieren sus salas?
                    </button>
                  </h2>
                  <div id="accordion-collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      <p>Recomendamos una limpieza regular con productos suaves para mantener la apariencia y calidad de nuestras salas. Proporcionamos instrucciones específicas de cuidado con cada compra.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse4" aria-expanded="false" aria-controls="accordion-collapse4">
                      ¿Cómo puedo comprobar la comodidad de sus sofás antes de comprar?
                    </button>
                  </h2>
                  <div id="accordion-collapse4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      <p>Te invitamos a visitar nuestro showroom ubicado en Plaza Encino para experimentar la comodidad y calidad de nuestros sofás. También ofrecemos asesoría personalizada para ayudarte a elegir el sofá perfecto para tu hogar.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog py-5">
    <div class="container">
      <div class="row justify-content-center py-5">
        <div class="col-md-6 text-center">
          <h2 class="display-5 fw-bold">Blog</h2>
        </div>
      </div>
      <div class="row g-5" style="display: flex;align-items:center;justify-content:center;">
        @foreach ($blog as $blogs)
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a id="{{$blogs->id}}" href="{{ route('index.singlepost', $blogs->id) }}">
                <img src="{{asset ('images/' . $blogs->imguno)}}" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-4">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Salas /</span>
                <span class="meta-day">{{$blogs->fecha}}</span>
              </div>
              <div class="post-content">
                <h2 class="fw-bold text-capitalize">
                  <a href="{{ route('index.singlepost', $blogs->id) }}">{{$blogs->titulo}}</a>
                </h2>
                <p class="textocortado">{{$blogs->textouno}}</p>
                <a href="{{ route('index.singlepost', $blogs->id) }}" class="btn rounded-pill px-3" style="background-color: #141722;color:white;">Leer más</a>
              </div>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <section class="newsletter bg-black py-5" data-bs-theme="dark">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1" style="margin:auto;">
          <div class="row my-5 align-items-center">
            <div class="col-md-12" style="text-align: center;">
              <h3 class="display-4 m-0" style="font-size: 6vh;">¡Aprovecha ahora! Obtén un 10% de descuento en tu primera compra. Diciendo que viste esta promoción en nuestro sitio web.</h3>
              <p class="fs-6 text-gray">Se aplican restricciones l Consulta términos y condiciones.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer id="footer" class="bg-black border-top" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-4 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
              <a href="index.html">
                <img width="247" height="64" src="images/logosofamima.png" alt="">
              </a>
            </div>
            <p>En sofá mima somos una empresa orgullosamente regia, nos distinguimos por la calidad de nuestros muebles los cuales tiene un respaldo de 50 años de experiencia en el mercado, buscando siempre brindarte la mejor calidad y confort.</p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">Atajos</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="/" class="item-anchor">Home</a>
              </li>
              <li class="menu-item">
                <a href="/catalogo" class="item-anchor">Catálogo</a>
              </li>
              <li class="menu-item">
                <a href="/sobrenosotros" class="item-anchor">Sobre nosotros</a>
              </li>
              <li class="menu-item">
                <a href="/blog" class="item-anchor">Blog</a>
              </li>
              <li class="menu-item">
                <a href="/contacto" class="item-anchor">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">Sobre nosotros</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="/sobrenosotros" class="item-anchor">Diseñando calidad</a>
              </li>
              <li class="menu-item">
                <a href="/sobrenosotros#tradicion" class="item-anchor">Tradición en Cada Detalle</a>
              </li>
              <li class="menu-item">
                <a href="/sobrenosotros#herencia" class="item-anchor">Herencia de Calidad</a>
              </li>
              <li class="menu-item">
                <a href="/sobrenosotros#bienvenido" class="item-anchor">SofaMima</a>
              </li>
              <li class="menu-item">
                <a href="/sobrenosotros#reseñas" class="item-anchor">Reseñas</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
            <h5 class="widget-title mb-4">Contáctanos</h5>
            <p>¿Tienes alguna pregunta o sugerencia? <a href="mailto:contacto@sofamima.com" class="item-anchor">contacto@sofamima.com</a></p>
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

  <script>
    function toggleClassOnResize(){
      if (window.matchMedia("(max-width: 992px)").matches) {
          Array.from(document.getElementsByClassName("tarjetaresponsive")).forEach(element => {
              element.classList.remove("hover-effect-slide");
          });
      } else {
          Array.from(document.getElementsByClassName("tarjetaresponsive")).forEach(element => {
              element.classList.add("hover-effect-slide");
          });
      }
    }

    toggleClassOnResize();
    window.addEventListener('resize', toggleClassOnResize);
  </script>

</body>
</html>