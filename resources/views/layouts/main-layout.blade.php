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
                            <img class="mw-100" src="{{ asset('media-assets/wide-malgre-tout-logo.png') }}" alt="Malgré Tout logo">
                        </a>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/advertisements" class="nav-link {{ (request()->is('advertisements*')) ? 'active' : '' }}">Annoncer</a>
                        </li>
                        <li class="nav-item">
                            <a href="/campaigns" class="nav-link {{ (request()->is('campaigns*')) ? 'active' : '' }}">Kampagner</a>
                        </li>
                        <li class="nav-item">
                            <a href="/profile" class="nav-link {{ (request()->is('profile*')) ? 'active' : '' }}">Profil</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="nav-item">
                            <a href="/videos" class="nav-link {{ (request()->is('videos*')) ? 'active' : '' }}">Videoer<sub class="text-pink">kommer snart</sub></a>
                        </li>
                        <li class="nav-item">
                            <a href="/addons" class="nav-link {{ (request()->is('addons*')) ? 'active' : '' }}">Addons</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ring" class="nav-link">+45 7027 4300</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="mt-5 nav-item">
                            <a href="#logout" class="nav-link"><i class="fas fa-mobile-alt"></i> Log ud</a>
                        </li>
                    </ul>

                </nav>
            </div> <!-- Sidebar END -->

            <!-- Content Wrapper -->
            <div class="col-lg-10 col-md-9 col-sm-12">
                <header class="row mh-25">
                    <ul class="nav justify-content-end bg-light">
                        <li class="nav-item">
                            <img src="{{ asset('media-assets/Logo-Malgré-Tout-192x192.png') }}" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 50)" />1107 Malgré Tout Credits
                        </li>
                        <li class="nav-item">
                            <a href="#language" class="nav-link">
                                <img src="#flag" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 50)" />
                                Sprogvalg
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profil" class="nav-link">
                                <img src="#profile-picture.jpg" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 50)" />
                                <span class="fw-bold">Tina Bjerre </span>
                                <span class="text-light">Annoncør</span>
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="row">
                    <main class="min-vh-75">
                        <section id="content">
                            @yield('content')
                        </section>
                    </main>
                    <footer class="container d-flex justify-content-center">Copyright Malgré Tout 2021-2021</footer>
                </div>
            </div> <!-- Content Wrapper End -->
        </div>
    </div> <!-- The Big Wrapper END -->
    <script>
        function insertPlaceholderImage(width, height = width) {
            console.warn(`Called insertPlaceholderImage(width, height) on ${this.src}`);
            this.onerror = null; // resets the error to prevent infinite loop.
            this.src = `https://via.placeholder.com/${width}x${height}.webp?text=placeholder+image`;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
