<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="st.css">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body style="background-color:cornflowerblue">
<header id="header" class="fixed-top" >
    <div class="container-fluid">
      <h1 class="logo mt-5"><a href="index.html">Make My Trip</a></h1>     
      @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-3 py-1">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-secondary">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary p-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger p-2">Signup</a>
                        @endif
                    @endauth
                </div>
      @endif   

    </div>
  </header><!-- End Header -->
<section id="about" class="about">
<div class="container-fluid mt-5" data-aos="fade-down">
<div class="row">
@foreach($detail as $details) 
<div class="col-md-3 grid-margin stretch-card mt-5 p-5"> 
    <div class="card">  
          <div class="card-body p-3 mt-3">  
            <label style="display:inline-block">bus_name:</label>                  
                  <input type="text" style = "border:0px" class ="form-control" name="bus_name" value="{{ $details->bus_name }}">
                                                
              <label>location:</label> 
                  <input type="text" style = "border:0px" class="form-control" name="location" value="{{ $details->places }}" >
               
              <label>date:</label>
                  <input type="text" style = "border:0px" class="form-control" name="date" value="{{ $details->date }}">
                
               <label>capacity:</label>
                  <input type="text" style = "border:0px" class="form-control" name="capacity" value="{{ $details->No_of_seats}}">
               
              <label>bustype:</label>
                  <input type="text" style = "border:0px"  class="form-control" name="bus_type" value="{{ $details->bus_types }}">         
                  <a href="{{ route('login') }}" class="btn btn-danger">book now</a>
          </div>
         
</div>
    </div>
    @endforeach
</div>
</div>     
</section>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jQuery/3.3.1/jQuery.min.js">
</script>     
</body>
</html>
