<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B Annonce Platform</title>
    <script src="https://kit.fontawesome.com/402c854aed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> <!-- public/css/app.css -->
</head>
<body>
    <!-- The Big Wrapper -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div id="sidebar" class="col-lg-2 col-md-3">
                <nav class="navbar navbar-light bg-light">
                    <ul class="nav nav-pills flex-column">
                        <a class="navbar-brand" href="/">
                            <img src="#" alt="logo">
                        </a>
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="#annoncer" class="nav-link {{ (request()->is('#annoncer')) ? 'active' : '' }}">Annoncer</a>
                        </li>
                        <li class="nav-item">
                            <a href="#kampagner" class="nav-link">Kampagner</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profil" class="nav-link">Profil</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="nav-item">
                            <a href="#videoer" class="nav-link">Videoer<sub class="text-pink">kommer snart</sub></a>
                        </li>
                        <li class="nav-item">
                            <a href="#addons" class="nav-link">Addons</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ring" class="nav-link">+45 7027 4300</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="mt-5">
                            <a href="#logout"><i class="fas fa-mobile-alt"></i>Log ud</a>
                        </li>
                    </ul>

                </nav>
            </div> <!-- Sidebar END -->

            <!-- Content Wrapper -->
            <div class="col-lg-10 col-md-9 col-sm-12">
                <header class="row">
                    <ul class="nav justify-content-end bg-secondary">
                        <li class="nav-item">
                            <img src="#malgretout-round-logo" class="rounded" />1107 Malgré Tout Credits
                        </li>
                        <li class="nav-item">
                            <img src="#flag" class="rounded"/>
                            <a href="#language" class="nav-link">Sprogvalg</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profil" class="nav-link">
                                <img src="#profile-picture.jpg" class="rounded"/>
                                Tina Bjerre <span class="text-light">Annoncør</span>
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="row">


                    <main class="pt-4">
                        <section id="content">
                            @yield('content')
                        </section>

                    </main>
                    <footer class="container d-flex justify-content-center">Copyright Malgré Tout 2021-2021</footer>
                </div>
            </div> <!-- Content Wrapper End -->
        </div>
    </div> <!-- The Big Wrapper END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
