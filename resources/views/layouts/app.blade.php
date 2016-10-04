<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/keen-ui.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('layouts.materialize-nav')

    @yield('content')

    <!--@include('layouts.footer')-->

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://use.fontawesome.com/e0f22e2070.js"></script>
    <script type="text/javascript">

      $( document ).ready(function(){
          $(".button-collapse").sideNav();
          
      });
    </script>

    @yield('post-script')
</body>
</html>
