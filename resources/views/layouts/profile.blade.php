<!DOCKTYPE html>
<html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-perfetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="terxt/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stysheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav mr-auto">
                        
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            
            <nain class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
               @yield('content')
            </nain>
        </div>
    </body>
</html>