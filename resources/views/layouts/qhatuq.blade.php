<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    <header id="sectionNav" class="container-fluid">
        @include('includes.header')
    </header>

    <div id="main">
        @yield('content')
    </div>

    <footer id="sectionFooter" class="container-fluid">
        @include('includes.footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--     <script src="{{ url('/js/main.js') }}"></script> -->
    <!-- <script>
        $(document).ready(function(){ // Script del Navegador
            $("ul.subnavegador").hide();
            $("a.desplegable").on("click", desplegar);

            function desplegar(){
                $(this).find("ul.subnavegador").toggle("slow");
            }               
        });


    </script> -->

    <!-- <script src="{{ url('/js/material.js') }}" rel="stylesheet"></script>
    <script src="{{ url('/js/ripples.js') }}" rel="stylesheet"></script>
    <script src="{{ url('/js/dropdown.js') }}" rel="stylesheet"></script>
    <script>
        $(document).on('ready', function(){
            $.material.init();
        });
    </script>  --> 

</body>
</html>