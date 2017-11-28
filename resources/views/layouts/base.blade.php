<!-- Stored in resources/views/layouts/base.blade.php -->

<html>
    <head>
        <title>Blog - @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/paper.css') }}" />
    </head>
    <body>
        <div class="row">
            @hasSection('sidebar')
                <div class="col4 col">
                    @section('sidebar')
                        This is the master sidebar.
                    @show
                </div>
            <div class="col8 col">
            @else
            <div class="col12 col">
            @endif
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>