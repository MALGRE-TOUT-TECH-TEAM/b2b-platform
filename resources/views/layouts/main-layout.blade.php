<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> <!-- public/css/app.css -->
</head>
<body>
    <header>
        <nav class="p-2">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="testing" class="nav-link">Testing</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <section id="sidebar" class="col-md-3">
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="/" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="#annoncer" class="nav-link">Annoncer</a></li>
                        <li class="nav-item"><a href="#kampagner" class="nav-link">Kampagner</a></li>
                        <li class="nav-item"><a href="#profil" class="nav-link">Profil</a></li>
                        <hr>
                        <li class="nav-item"><a href="#videoer" class="nav-link">Videoer<sub class="text-pink">kommer snart</sub></a></li>
                        <li class="nav-item"><a href="#addons" class="nav-link">Addons</a></li>
                        <li class="nav-item"><a href="#ring" class="nav-link">+45 7027 4300</a></li>
                    </ul>
                </nav>
            </section>
            <section id="content" class="col-md-9">
                @yield('content')
            </section>
        </div>
    </main>
    <footer class="container d-flex justify-content-center">Copyright Malgré Tout 2021-2021</footer>
</body>
</html>
