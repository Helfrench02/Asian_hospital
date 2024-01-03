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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
  .div_center{
    text-align: center;
    padding-top: 40px;
  
  }
  .h2_font{
    font-size: 40px;
    padding-bottom: 40px;
  }
  .input_color{
    color:black;
  }
  .center{
    margin: auto;
    width: 50%;
    text-align: center;
    margin-top: 30px;
    border: 3px solid white;
  }
  .data_color{
    color: black;
  }

 </style>
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
       <div class="container" style="width: auto; background-color: white; margin-top:20px">
       <h1 style="width: auto; color:black; margin-top: 40px;">View All Appointments</h1>
       <table class="center table table-success table-striped" style="margin-bottom:20px">
                <tr>
           
                  <td class="data_color">Name</td>
                  <td class="data_color">Phone</td>
                  <td class="data_color">Email</td>
                  <td class="data_color">Doctor</td>
                  <td class="data_color">Date</td>
                  <td class="data_color">Message</td>
                  <td class="data_color">Status</td>
                  <td class="data_color">Action</td>
            
                </tr>
                @foreach($appointments as $appointments)
                <tr>
                
                  <td class="data_color">{{$appointments->name}}</td>
                  <td class="data_color">{{$appointments->phone}}</td>
                  <td class="data_color">{{$appointments->email}}</td>
                  <td class="data_color">{{$appointments->doctor}}</td>
                  <td class="data_color">{{$appointments->date}}</td>
                  <td class="data_color">{{$appointments->message}}</td>
                  <td class="data_color">{{$appointments->status}}</td>               
                  <td>
                    
                    <a   class="btn btn-primary" href="{{url('show_edit_Form_appointment',$appointments->id)}}">Edit</a>
                    <a onclick="return confirm('Are you sure you want to remove this?')" class="btn btn-danger" href=" ">Delete</a>
                </td>
                  

             
                  
                </tr>
                @endforeach
              </table>
       </div>
          
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