<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/app.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <title>Prueba Magitek | @yield('title')</title>
    </head>
    <style type="text/css">
        nav.navbar-inverse {
        background-color: #000000;
        font-size: 20px;
        }
    </style>
    <body>
    
             <div class="container">
            @yield('content')
        </div>
    <script src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#clientes').DataTable();
        });
    </script>
    </body>
</html>