<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2B Annonce Platform</title>
    <script src="https://kit.fontawesome.com/402c854aed.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 5.1 -->
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
                            <a href="/dashboard" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}"><i class="fas fa-align-left"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/advertisements" class="nav-link {{ (request()->is('advertisements*')) ? 'active' : '' }}"><i class="fas fa-newspaper"></i> Annoncer</a>
                        </li>
                        <li class="nav-item">
                            <a href="/campaigns" class="nav-link {{ (request()->is('campaigns*')) ? 'active' : '' }}"><i class="fas fa-scroll"></i> Kampagner</a>
                        </li>
                        <li class="nav-item">
                            <a href="/profile" class="nav-link {{ (request()->is('profile*')) ? 'active' : '' }}"><i class="far fa-user"></i> Profil</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="nav-item">
                            <a href="/videos" class="nav-link {{ (request()->is('videos*')) ? 'active' : '' }}"><i class="fas fa-play"></i> Videoer<sub class="text-pink">kommer snart</sub></a>
                        </li>
                        <li class="nav-item">
                            <a href="/addons" class="nav-link {{ (request()->is('addons*')) ? 'active' : '' }}"><i class="far fa-image"></i> Addons</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ring" class="nav-link"><i class="fas fa-mobile-alt"></i> +45 7027 4300</a>
                        </li>
                        <hr> <!-- Horizontal rule -->
                        <li class="mt-5 nav-item">
                            <form action="logout" method="post">
                                @csrf
                                <button class="nav-link"><i class="fas fa-sign-out-alt"></i> Log ud</button>
                            </form>
                        </li>
                    </ul>

                </nav>
            </div> <!-- Sidebar END -->

            <!-- Content Wrapper -->
            <div class="col-lg-10 col-md-9 col-sm-12">
                <header class="row mh-25">
                    <ul class="nav justify-content-end align-items-center bg-light">
                        <li class="nav-item">
                            <img src="{{ asset('media-assets/Logo-Malgré-Tout-192x192.png') }}" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 30)" />1107 Malgré Tout Credits
                        </li>
                        <li class="nav-item">
                            <a href="#language" class="nav-link">
                                <img src="{{ asset('media-assets/flag-dk-36x36.jpg') }}" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 30)" />
                                Sprogvalg <img src="#dropdown-toggle" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 20)"/>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profil" class="nav-link">
                                <img src="{{ asset('media-assets/Tina-Bjerre.png') }}" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 50)" />
                                <span class="fw-bold">Tina Bjerre </span>
                                <span class="text-muted">Annoncør</span>
                                <img src="#dropdown-toggle" class="rounded-circle" onerror="insertPlaceholderImage.call(this, 20)"/>
                            </a>
                        </li>
                    </ul>
                </header>
                <main class="min-vh-75">
                    <section id="content">
                        @yield('content')
                    </section>
                </main>
                <footer class="container d-flex justify-content-center">Copyright Malgré Tout 2021-2021</footer>
            </div> <!-- Content Wrapper End -->
        </div>
    </div> <!-- The Big Wrapper END -->

    @yield('scripts')
    <script>
        function insertPlaceholderImage(width, height = width) {
            console.warn(`Called insertPlaceholderImage(width, height) on ${this.src}`);
            this.onerror = null; // resets the error to prevent infinite loop.
            this.src = `https://via.placeholder.com/${width}x${height}.webp?text=placeholder+image`;
        }
    </script>
  
    <!-- Bootstrap 5.1.0 javascript bundle (including Popper)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
