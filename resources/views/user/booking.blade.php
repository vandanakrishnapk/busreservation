
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Document</title>
</head>
<body>
<h4 style="color:blue"><u>Book your slot now</u></h4>
<div class="col-lg-9 ml-5 mt-5 bg-info" >
<form action="#" method="POST">
@csrf
<div class="form-group p-2 mt-5">
<input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
</div>
<div class="form-group p-0.5">
    <label>place</label>  
    <input type="text" name="places" class="form-control"  value="{{ $item->places }}">  
</div>
<div class="form-group p-0.5">
    <label>date</label>
<input type="text" name="date" class="form-control" value="{{ $item->date }}">

</div>
<div class="form-group p-0.5">
    <label>payment_status</label>
<input type="text" name="payment_status" class="form-control"  value="{{ $pay->status }}">
</div>
<div class="form-group p-0.5">
    <label>available_seats</label>
<input type="text" name="available_seats" class="form-control" value ="{{ $item->No_of_seats }}">
</div>
<div class="form-group p-0.5">
    <label>booking status</label>
<input type="text" name="booking_status"  class="form-control" value="1">
</div>
<button type="submit" class="btn btn-secondary mb-4">submit</button>
<a href="{{ route('transaction') }}" class="btn btn-danger">pay</a>
</form>
</div>   
</body>
</html>
