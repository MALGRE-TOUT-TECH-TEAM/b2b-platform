@extends("layouts.main-layout")

@section('content')
<h1>This is the Testing Page</h1>
<h2>Array Testing</h2>

<!-- Simple array-->
@isset($simpleArray)
<h3>Simple Array</h3>
@foreach($simpleArray as $number)
@if ($loop->last)
{{-- This is the last iteration --}}
{{ $number }}
@break
@endif
{{ $number }},
@endforeach
@endisset

<h3>Key Array</h3>
@isset($myArray)
<ul>
    <li>{{ $myArray["First"] }}</li>
    <li>{{ $myArray["Second"] }}</li>
    <li>{{ $myArray["Third"] }}</li>
    @foreach($myArray as $key => $value)
    {{ $key }} = {{ $value }}<br>
    @endforeach
</ul>
@endisset

<h3>"Nested" Arrays</h3>
<ul>
    @foreach($nestedArray as $key => $value)
    <pre>
         @php
             print_r($key);
         @endphp
    </pre>
    @endforeach
</ul>

{{-- $nestedArray = [
    'dates' => ['1st of January', '2nd of January', '3rd of January', '4th of January', '5th of January', '6th of January', '7th of January'],
    'visitors' => [2523, 5000, 3655, 3214, 2443, 3461, 1577],
    'page' => ['/dashboard', '/login', '/almightyAbovesHouse', '/over9000', '/suspiciousMammal', '/analytics', '/krom']
]; --}}


@if(isset($analyticsData))
<h2>Google Analytics Data</h2>
<table class="table table stripped">
    <tr>
        <th>Date</th>
        <th>Page Title</th>
        <th>Visitors</th>
        <th>Page Views</th>
    </tr>
    <pre>
    @php
        print_r($analyticsData)
    @endphp
    </pre>
    {{-- @foreach($analyticsData as $key => $value)
    <tr>
        <td>{{ $key['date']}}</td>
    <td>{{ $item['pageTitle'] }}</td>
    <td>{{ $item['visitors'] }}</td>
    <td>{{ $item['pageViews'] }}</td>
    </tr>
    @endforeach --}}
</table>

@endif
@endsection