<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('partials.metadata')
        @yield('code.header')
    </head>
    <body>
        @include('partials.header')
        <div class="site-wrapper">
            @yield('content')
        </div>
        @include('partials.footer')
        <link rel="stylesheet" href="/css/footer.css" media="screen">
        <script src="/js/app.min.js"></script>
        @yield('code.footer')
    </body>
</html>
