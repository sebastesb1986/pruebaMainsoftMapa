<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title', config('app.name'))</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  @stack('styles')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        
      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        
          <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                
              </div>
            </div>
            
           
         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
       

            <div class="topbar-divider d-none d-sm-block"></div>

           
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>WEATHER</b></span>
                 
                </a>
               
              </li>
            
              
          </ul>
       

        </nav>
        <!-- End of Topbar -->
        

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/js/jquery.easing.compatibility.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

  <!-- Scripts personalizados clases -->
@stack('scripts')


</body>

</html>