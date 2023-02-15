<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/styles.css">
        <script src="/js/script.js"></script>
       
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <header>
        <img src="/img/logo_Doutor-Nature.svg" alt="logo Header Doutor Nature">
    </header>
    <body>
        @yield('content')
        <footer>
            <small>Teste Técnico &copy;Doutor Nature 2023 - Cadastro com Laravel</small>
            <img src="/img/logo_footer-DoutorNature.svg" alt="Logo Doutor Nature">
        </footer>
    </body>
</html>
