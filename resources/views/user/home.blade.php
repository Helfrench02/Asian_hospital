<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
@if(session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
              
            @endif

    
<body>

  <!-- Header -->
  @include('user.header')
  <!-- Header -->
  

  <!-- frontier -->
    @include('user.frontier')
    <!-- frontier -->

 <!-- Our Doctor -->
 @include('user.ourDoctor')
  <!-- Our Doctor -->

 <!-- Latest -->
 @include('user.latest')
<!-- Latest -->

  <!-- AppointMent -->
  @include('user.appointment')
  <!-- AppointMent -->

  <!-- Banner -->
  @include('user.banner')
   <!-- Banner -->

<!-- Footer -->
@include('user.footer')
<!-- Footer -->
</body>
</html>

