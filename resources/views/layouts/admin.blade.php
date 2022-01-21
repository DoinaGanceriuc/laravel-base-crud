<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <header class="d-flex justify-content-between align-items-center bg-dark" style="height: 100px;">
            @include('partials.logo')
            @include('partials.header_top')
        </header>
        <main class="admin_site_main">
            <div class="d-flex h-100">
                <aside class="bg-light">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                                <a class="nav-link" href="#">Characters</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.comics.index')}}">Comics</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Movies</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Tv</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                        </li>
                    </ul>
                </aside>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </main>
    </body>
</html>
