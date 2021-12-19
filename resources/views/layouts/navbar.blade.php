<header class="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
     <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet">

	
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/front/assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front/assets/css/owl.css') }}">

  <!--bootstrap-footer -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Used Cars <em>Showroom</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href={{ url('/') }}>Home
                   
                  </a>
              </li> 

              <li class="nav-item"><a class="nav-link" href={{ url('/cars') }}>Cars</a></li>
              <li class="nav-item"><a class="nav-link" href={{ url('/about') }}>About Us</a></li>
              
              <li class="nav-item"><a class="nav-link" href={{ url('/contact') }}>Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
    <section id="app">
      
    
