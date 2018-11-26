<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravue 1.0.0</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">

            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <router-link to="/" class="navbar-brand">Laravue</router-link>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <router-link to="/about" tag="li">
                                <a>About</a>
                            </router-link>
                        </ul>
                    </div>
                </div>
            </nav>

            <router-view></router-view>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
