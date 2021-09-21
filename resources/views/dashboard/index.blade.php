@extends('layouts.main-layout')

@section('title') Dashboard @endsection

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
    <!-- Upper box row (3 boxes)-->
    <div class="row justify-content-between">
        <!-- Box 1 -->
        <div class="col-lg-3 stat-box bg-light rounded box-shadow">
            <h3 class="">Besøgende sidste syv dage</h3>
            <canvas id="visitors-last-seven-days-chart">
            </canvas>
        </div>
        <!-- Box 2 -->
        <div class="col-lg-3 stat-box bg-light rounded box-shadow">
            <div class="row">
                <h3>Besøgende lige nu</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>Få vist hvor mange besøgende der er på siden lige nu</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('media-assets/people-icon-85x85.png') }}" />
                </div>
            </div>
        </div>
        <!-- Box 3-->
        <div class="col-lg-5 stat-box bg-light rounded box-shadow">
            <h3>Besøgende sidste måned</h3>
            <canvas id="visitors-this-month-chart">
            </canvas>
        </div>
    </div>
</section>

<!-- Advertiser's banner stats section -->
<section class="row justify-content-around pb-4">
    <header class="row pb-2">
        <h2>Winthers Rideudstyr</h2>
    </header>
    <!-- Middle box row (4 boxes) -->
    <div class="row justify-content-between pb-3">
        <!-- Box 1 -->
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row h-100 justify-content-center">
                <h3>Aktive annoncer</h3>

                <div class="col-md-11 progress box-shadow rounded h-25 p-0" data-toggle="tooltip" data-placement="top"
                    title="6 ud af 10">
                    <div class="progress-bar bg-pink" style="width: 60%">
                    </div>
                </div>
                <a href="" class="col-md-12 align-self-end text-dark fw-bold">Administrer annoncer <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
        <!-- Box 2 -->
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row">
                <h3>Visninger i alt</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="fs-2 fw-bold mw-100">107.039</span> <!-- This number should be data from analytics -->
                </div>
                <div class="col-lg-4 justify-content-center">
                    <div>
                        <img src="{{ asset('media-assets/view-icon-85x85.png') }}" class="mw-100"
                            onerror="insertImagePlaceholder.call(this, 85)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <span class="text-danger">Index 80</span> | Du har færre visninger
                    <img src="{{ asset('media-assets/ios-information-outline-22x22.png') }}" title="Få hjælp">
                </div>
            </div>
        </div>
        <!-- Box 3 -->
        <div class="col-lg-2 stat-box rounded box-shadow">
            <div class="row">
                <h3>Klik i alt</h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12"><span class="fs-2 fw-bold align-items-center">68.512 </span> </div>
                <!-- This number should be data from analytics -->
                <div class="col-lg-4 col md 12">
                    <img src="{{ asset('media-assets/hand-icon-85x85.png') }}" class="mw-100" />
                </div>
            </div>
            <div class="row">
                <div>
                    <span class="text-success">Index 120</span> | Du har flere klik
                    <img src="{{ asset('media-assets/ios-information-outline-22x22.png') }}" title="Få hjælp">
                </div>
            </div>
        </div>
        <!-- Box 4 -->
        <div class="col-lg-2 stat-box rounded box-shadow bg-dark-gradient">
            <div class="row h-100 justify-content-center pb-3 text-center">
                <h3 class="text-light col-lg-9">Administrer dine annoncer</h3>
                <p class="text-gray col-lg-9">
                    Gå til annonceadministrator og ret eller opret nye annoncer
                </p>
                <a class="col-md-8 text-light" href="">Administrer <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div> <!-- Middle box row (4 boxes) END -->
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
    const options = {

    }

    // Visitors last seven days chart
    let canvasLastSeven = document.getElementById('visitors-last-seven-days-chart');
    var myChart = new Chart(canvasLastSeven, {
        type: 'bar',
        data: {
            // labels: ['Lør', 'Søn', 'Man', 'Tir', 'Ons', 'I går', 'I dag'],
            datasets: [{
                label: '',
                data: [
                    {x:'Lør', y: 9572},
                    {x:'Søn', y: 2053},
                    {x:'Man', y: 1446},
                    {x:'Tir', y: 6003},
                    {x:'Ons', y: 2310},
                    {x:'I går', y: 9572},
                    {x:'I dag', y: 7322},
                ],
                backgroundColor:'rgba(0, 0, 0, 1)',
            }]
        },
        options:{
            scales: {
                y:{
                    beginsAtZero: true
                }
            }
        }
    });
</script>

<script>
    // Visitors this month chart
    let canvasVisitorsThisMonth = document.getElementById('visitors-this-month-chart');
    var myChart = new Chart(canvasVisitorsThisMonth, {
        type: 'line',
        data: {
            // labels: ['19. juni', '20 juni', '21 juni', '22. juni', '23 juni', '24 juni'],
            datasets: [{
                label: '',
                data: [
                    {x:'9. juni', y: 2553},
                    {x:'10. juni', y: 3053},
                    {x:'11. juni', y: 4053},
                    {x:'12. juni', y: 3053},
                    {x:'13. juni', y: 6053},
                    {x:'14. juni', y: 4053},
                    {x:'15. juni', y: 4353},
                    {x:'16. juni', y: 5053},
                    {x:'17. juni', y: 2053},
                    {x:'18. juni', y: 1753},
                    {x:'19. juni', y: 2053},
                    {x:'20. juni', y: 1446},
                    {x:'21. juni', y: 6003},
                    {x:'22. juni', y: 788},
                    {x:'23. juni', y: 9572},
                    {x:'24. juni', y: 7322},
                ],
                fill:true,
                borderColor:'rgba(219, 134, 121, 1)',
                backgroundColor:'rgba(219, 134, 121, 0.5)',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    gridLines:{
                        display:false
                    }
                }]
            }
        }
    });

</script>


<script>
    // Visits over time line chart script
    // Chart.defaults.scale.gridLines.display = false;
    let canvasVisitorsOverTime = document.getElementById('visits-over-time-line-chart');
    var myChart = new Chart(canvasVisitorsOverTime, {
        type: 'line',
        data: {
            // labels: ['19. juni', '20 juni', '21 juni', '22. juni', '23 juni', '24 juni'],
            datasets: [{
                label: '',
                data: [
                    {x:'19. juni', y: 2053},
                    {x:'20. juni', y: 1446},
                    {x:'21. juni', y: 6003},
                    {x:'22. juni', y: 788},
                    {x:'23. juni', y: 9572},
                    {x:'24. juni', y: 7322},
                ],
                fill:true,
                borderColor:'rgba(219, 134, 121, 1)',
                backgroundColor:'rgba(219, 134, 121, 0.5)',
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    gridLines:{
                        display:false
                    }
                }]
            }
        }
    });

</script>

@endsection