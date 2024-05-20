<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""> 
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav fw-bold">
                      <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
                      <a class="nav-link" href="#">COMICS</a>
                      <a class="nav-link" href="#">MOVIES</a>
                      <a class="nav-link" href="#">TV</a>
                      <a class="nav-link" href="#">GAMES</a>
                      <a class="nav-link" href="#">COLLECTIBLES</a>
                      <a class="nav-link" href="#">VIDEO</a>
                      <a class="nav-link" href="#">FANS</a>
                      <a class="nav-link" href="#">NEWS</a>
                      <a class="nav-link" href="#">SHOP</a>
                    </div>
                  </div>
                </div>
            </nav>
        </div>     
    </header>
    <main>
        @yield('content')
    </main>

</body>

</html>