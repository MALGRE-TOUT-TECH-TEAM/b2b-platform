@extends('layouts.main-layout')

@section('content')
<section class="row bg-pink justify-content-around pb-4" id="visitor-analytics">
    <header class="row align-items-center justify-content-start pb-2">
        <h1 class="col-xl-2 col-lg-3 col-md-5 col-sm-4 text-light">Dashboard </h1>
        <div class="col-xl-2 col-lg-3 col-md-5 col-sm-4  ms-lg-5 ms-sm-2">
            <select id="site-selector" class="custom-select bg-light btn rounded-pill">
                <option value="malgretoutdk" selected>malgretoutdk</option>
                <option value="malgretoutmedia">malgretoutmedia</option>
            </select>
        </div>
    </header>
    <div class="row justify-content-between">
        <div class="col-lg-3 stat-box bg-light rounded box-shadow">
            <h3 class="">Besøgende sidste syv dage</h3>
            Vertical bar graph her.
        </div>
        <div class="col-lg-3 stat-box bg-light rounded box-shadow">
            <h3>Besøgende lige nu</h3>
        </div>
        <div class="col-lg-5 stat-box bg-light rounded box-shadow">
            <h3>Besøgende sidste måned</h3>
            Line graph skal være her.
        </div>
    </div>
</section>

<!-- Advertiser's banner stats section -->
<section class="row justify-content-around pb-4">
    <header class="row pb-2">
        <h2>Winthers Rideudstyr</h2>
    </header>
    <!-- 4 boxes in the middle row -->
    <div class="row justify-content-between pb-3">
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row h-100 justify-content-center">
                <h3>Aktive annoncer</h3>
                <div class="col-md-11 box-shadow rounded text-center p-1">"progress-bar"</div>
                <a href="" class="col-md-12 align-self-end text-dark">Administrer annoncer -></a>
            </div>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row h-100">
                <h3>Visninger i alt</h3>
                <div class="fs-1 fw-bold col-8">107.039
                </div>
                <div class="rounded bg-dark-gradient col-3">
                    <span class="text-light">eye</span>
                </div>
            </div>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row h-100">
                <h3>Klik i alt</h3>
                <p class="fs-1 fw-bold">68.512</p>
            </div>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow bg-dark-gradient">
            <div class="row h-100 justify-content-center pb-3">
                <h3 class="text-light col-md-8">Administrer dine annoncer</h3>
                <p class="text-muted col-md-8 text-center">Gå til annonceadministrator og ret eller opret nye annoncer
                </p>
                <a class="col-md-8 text-center" href="" class="text-light">Administrer -></a>
            </div>
        </div>
    </div> <!-- 4 boxes in the middle row END -->
    <!-- "Visninger over tid" row -->
    <div class="row justify-content-around">
        <div class="col-sm-12 stat-box box-shadow rounded">
            <header class="row">
                <h3 class="col-3">Visninger over tid</h3>
                <div class="col-2 ms-auto">
                    <select id="visits-over-time-date-range"
                        class="custom-select bg-light box-shadow btn rounded-pill w-100 mt-2">
                        <option value="june" selected>June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                    </select>
                </div>
            </header>
            <div class="row">
                <div class="col-12">
                    <canvas id="visits-over-time-line-chart" height="400">
                    </canvas>
                </div>
            </div>
        </div>
    </div> <!--  "Visninger over tid" row END -->
</section> <!-- Advertiser's banner stats section END -->
@endsection
@section('scripts')
<!-- Charts.js 3.5.1-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"
    integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // Visists over time line chart script
    let canvas = document.getElementById('visits-over-time-line-chart');
    var myChart = new Chart(canvas, {
        type: 'line',
        data: {
            // labels: ['19. juni', '20 juni', '21 juni', '22. juni', '23 juni', '24 juni'],
            datasets: [{
                label: '',
                data: [
                    {x:'19. juni', y:2053},
                    {x:'20. juni', y: 1446},
                    {x:'21. juni', y: 6003},
                    {x:'22. juni', y: 788},
                    {x:'23. juni', y: 9572},
                    {x:'24. juni', y: 7322},
                ],
                fill:true,
                borderColor:'rgba(255, 0, 0, 0.5)',
                backgroundColor:'rgba(255, 0, 0, 0.2)',
            }]
        }
    });

</script>

@endsection