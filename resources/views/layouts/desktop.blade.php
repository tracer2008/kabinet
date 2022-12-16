<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>Личный кабинет</title>
    <meta name="description" content="Цифровой сервис личного кабинета для учебных заведений">

    <link href="{{ mix("css/desktop.css") }}" rel="stylesheet">

</head>

<body>

<div class="body">
    <div id="app">
        @include("app.include.header")
        @yield('content')
        @include("app.include.footer")
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')

</body>

</html>
