@extends('layouts.main-layout')

@section('content')
<section class="row bg-pink justify-content-around pb-4" id="visitor-analytics">
    <header class="row align-items-center">
        <h1 class="col-xl-2 col-lg-3 col-md-5 col-sm-4 text-light">Dashboard </h1>
        <div class="col-xl-2 col-lg-3 col-md-5 col-sm-4  ms-lg-5 ms-sm-2">
           <select id="site-selector" class="custom-select bg-light btn rounded-pill">
               <option value="malgretoutdk" selected>malgretoutdk</option>
               <option value="malgretoutmedia">malgretoutmedia</option>
           </select>
        </div>
    </header>
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
</section>

<section class="row justify-content-around pt-4">
    <h2>Winthers Rideudstyr</h2>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h3>Aktive annoncer</h3>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h3> Visninger i alt<h3>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h3>Klik i alt</h3>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow bg-dark-gradient mt-3">
            <h4 class="text-light">Administrer dine annoncer</h4>
        </div>
</section>
<section class="row justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <h3 class="col-md-3 justify-content-start">Visninger over tid</h3>
            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-4  ms-lg-5 ms-sm-2">
                <select id="visits-over-time-date-range" class="custom-select bg-light btn rounded-pill">
                    <option value="june" selected>june</option>
                    <option value="july">july</option>
                    <option value="august" selected>june</option>
                </select>
             </div>
        </div>
       
    </div>
</section>
@endsection
