<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href={{ asset("bootstrap-5.2.1/css/bootstrap.css") }} rel="stylesheet"/>
    <link href={{ asset("css/default.css") }} rel="stylesheet"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid h-100 p-0 overflow-hidden">
    <nav class="navbar navbar-expand-lg bg-light p-2">
        <div class="py-2">
            <span class="ms-3">Teste Crud</span>
        </div>
    </nav>
    <div class="d-flex " style="background: #ECF0F5; height: calc(100vh - 130px)">
        <div class="p-2 w-100">
            @yield('conteudo')
        </div>
    </div>
    <footer>
        <p class="text-center">
            <strong>Dashboard 2022</strong>
        </p>
    </footer>
</div>
</body>

<script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('bootstrap-5.2.1/js/bootstrap.js')}}"></script>
</html>
