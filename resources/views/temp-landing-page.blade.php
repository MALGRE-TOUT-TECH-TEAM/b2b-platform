@extends('layouts.app')

@section('content')
<style>
    .temp-container{
        background-color:lightblue;
        width:100%;
        min-height: 400px;
    }
    ul{
        list-style: none;
    }

</style>
    <div class="temp-container">
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="pdf">Generate PDF</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Nothing</a></li>
            </ul>
        </nav>
    </div>
@endsection