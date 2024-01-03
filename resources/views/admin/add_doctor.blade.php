<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <style>
        .form_css{
            margin-top: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }
       
    </style>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
   
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-bs-dismiss="alert"  aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
            @endif
          <h1>Add Doctor</h1>
          <form action="{{url('/add_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container" align="center" style="padding-top: 100px;">
                <div class="form_css">
                    <label>Doctor's Name: </label>
                    <input type="text" name="doctor_name"  style="color: black;" placeholder="Write Doctor Name">
                </div>
                <div class="form_css">
                    <label>Phone: </label>
                    <input type="text" name="doctor_phone"  style="color: black;" placeholder="+63">
                </div>
                <div class="form_css">
                    <label>Address: </label>
                    <input type="text" name="doctor_address"  style="color: black;" placeholder="Blk.4,Lot 13, Planasville, Brgy. Tunasan, Muntinlupa">
                </div>
     
                <div class="form_css">
                    <label>Specialty: </label>
                    @csrf
                     <select name="specialty" style="color: black;"   id="">
                    @foreach($specialty as $specialty)
                        <option  >{{$specialty->specialty}}</option>
                        @endforeach
                     </select>
                </div>
                <div class="form_css">
                    <label>Room: </label>
                    @csrf
                     <select name="room" style="color: black;"   id="">
                    @foreach($room as $room)
                        <option value="{{$room->room_number}}" >{{$room->room_number}}</option>
                        @endforeach
                     </select>
                </div>
                 
                <div class="form_css">
                    <label>Doctor's Image: </label>
                    <input type="file" name="image_file"   >
                </div>
                <div class="form_css">
                    
                    <input type="submit" name="submit"  class="btn btn-primary">
                </div>
                </div>
       
              </form>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>