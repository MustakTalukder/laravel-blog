<!DOCTYPE html>
<html lang="en">

<head>

    @include('user/layouts/head')

</head>

<body>

  <!-- Navigation -->
    @include('user/layouts/header')

  <!-- Main Content -->

    @section('main-content')

    @show
        
    
 

  <hr>

  <!-- Footer -->
  <footer>

    @include('user/layouts/footer')
    
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>

</body>

</html>
