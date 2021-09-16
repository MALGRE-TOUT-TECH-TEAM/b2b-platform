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
        </div>
        <div class="col-lg-3 stat-box bg-light rounded box-shadow">
            <h3>Besøgende lige nu</h3>
        </div>
        <div class="col-lg-5 stat-box bg-light rounded box-shadow">
            <h3>Besøgende sidste måned</h3>
            Lang graf
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
            <h3>Aktive annoncer</h3>
            <div>"progress-bar"</div>
            <a href="">Administrer annoncer -></a>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow">
            <h3>Visninger i alt</h3>
            <p class="fs-1 fw-bold">107.039</p>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow">
            <h3>Klik i alt</h3>
            <p class="fs-1 fw-bold">68.512</p>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow bg-dark-gradient">
            <h3 class="text-light">Administrer dine annoncer</h3>
        </div>
    </div>
    <!-- "Visninger over tid" row -->
    <div class="row justify-content-around">
        <div class="col-sm-12 stat-box box-shadow rounded">
            <header class="row">
                <h3 class="col-3">Visninger over tid</h3>
                <div class="col-3 ms-auto">
                    <select id="visits-over-time-date-range" class="custom-select bg-light box-shadow btn rounded-pill mt-2">
                        <option value="june" selected>June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                    </select>
                </div>
            </header>
            <div class="row">
                <div class="col-12">
                    Da BIG ol' badie graph mon
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
