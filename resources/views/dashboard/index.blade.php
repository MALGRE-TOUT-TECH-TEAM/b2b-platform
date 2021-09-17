@extends('layouts.main-layout')

@section('content')
<section class="row bg-pink justify-content-around pb-4" id="visitor-analytics">
    <h1 class="text-light">Dashboard </h1>
    <div>malgretout.dk (bar)</div>
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
<section>

</section>
@endsection
