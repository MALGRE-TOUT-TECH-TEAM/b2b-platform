@extends('layouts.main-layout')

@section('content')
<section class="row bg-pink justify-content-around" id="visitor-analytics">
    <div class="col-md-12">
        <h1 class=".">Dashboard</h1>
    </div>

    <div class="col-lg-3 bg-light rounded">
        <h3>Besøgende sidste syv dage</h3>
    </div>
    <div class="col-lg-3 bg-light rounded">
        <h3>Besøgende lige nu</h3>
    </div>
    <div class="col-lg-5 bg-light rounded">
        <h3>Besøgende sidste måned</h3>
        Lang graf
    </div>
</section>
<section class="row pt-4">
    <h2>Winthers Rideudstyr</h1>
        <div class="col-md-3 rounded box-shadow">Aktive annoncer</div>
        <div class="col-md-3 rounded">Visninger i alt</div>
        <div class="col-md-3 rounded">Klik i alt</div>
        <div class="col-md-3 rounded bg-dark">Administrer dine annoncer</div>
</section>
@endsection
