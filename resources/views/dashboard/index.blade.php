@extends('layouts.main-layout')

@section('content')
<section class="row bg-pink justify-content-around pb-4" id="visitor-analytics">
    <h1 class="text-light">Dashboard </h1>
    <div>malgretout.dk (bar)</div>
    {{-- <div class="row justify-content-around align-items-start pb-2"> --}}
    <div class="col-lg-3 bg-light rounded box-shadow">
        <h4 class="">Besøgende sidste syv dage</h4>
    </div>
    <div class="col-lg-3 bg-light rounded box-shadow">
        <h4>Besøgende lige nu</h4>
    </div>
    <div class="col-lg-5 bg-light rounded box-shadow">
        <h4>Besøgende sidste måned</h4>
        Lang graf
    </div>
    {{-- </div> --}}
</section>

<section class="row justify-content-around pt-4">
    <h2>Winthers Rideudstyr</h2>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h4>Aktive annoncer</h4>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h4> Visninger i alt<h4>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow mt-3">
            <h4>Klik i alt</h4>
        </div>
        <div class="col-lg-2 stat-box rounded box-shadow bg-dark-gradient mt-3">
            <h4 class="text-light">Administrer dine annoncer</h4>
        </div>
</section>
@endsection
