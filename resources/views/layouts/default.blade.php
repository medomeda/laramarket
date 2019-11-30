<!doctype html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>

        <header>
            @include('partials.navbar')
        </header>

        <div id="main" style="min-height:600px;">
            @yield('content')
        </div>

        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>

