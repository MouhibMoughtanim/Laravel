<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel pipe</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    @yield('styleshets')
<body>
    

    @include('partials.navbaradmin')

    <div class="container mt-5" > 
            @yield('content')
    </div>
    
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.js') }}"></script>

     <script>
           $(document).ready(function(){
               
            alert('1');

           })
     </script>    
     @yield('javascript')
</body>
</html>