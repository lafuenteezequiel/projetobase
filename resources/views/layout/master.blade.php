<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layout.head')
</head>

<body>
<div class="container">
    @yield('conteudo')
</div>

@include('layout.footer')
</body>
</html>