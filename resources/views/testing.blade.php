@extends("layouts.main-layout")

@section('content')
<h1>This is the Testing Page</h1>
<h2>Array Testing</h2>

<!-- Simple array-->
@isset($simpleArray)
<div>
    <h3>Simple Array</h3>
    @foreach($simpleArray as $number)
    @if ($loop->last)
    {{-- This is the last iteration --}}
    {{ $number }}
    @break
    @endif
    {{ $number }},
    @endforeach
</div>
@endisset

<h3>Associative Array</h3>
@isset($assArray)
<ul>
    <li>{{ $assArray["First"] }}</li>
    <li>{{ $assArray["Second"] }}</li>
    <li>{{ $assArray["Third"] }}</li>
    @foreach($assArray as $key => $value)
    {{ $key }} = {{ $value }}<br>
    @endforeach
</ul>
@endisset

@isset($multidimensionalArray)
{{-- 
$nestedArray = [
    'dates' => ['1st of January', '2nd of January', '3rd of January', '4th of January', '5th of January', '6th of January', '7th of January'],
    'visitors' => [2523, 5000, 3655, 3214, 2443, 3461, 1577],
    'page' => ['/dashboard', '/login', '/almightyAbovesHouse', '/over9000', '/suspiciousMammal', '/analytics', '/krom']
]; --}}
<div>
    <h3>Multidimensional Arrays</h3>
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Visitors</th>
            <th>Page</th>
        </tr>

        @for($i = 0; $i < count($multidimensionalArray['dates']); $i++) 
            <tr>
                <td>{{ $multidimensionalArray['dates'][$i] }}</td>
                <td>{{ $multidimensionalArray['visitors'][$i] }}</td>
                <td>{{ $multidimensionalArray['page'][$i] }}</td>
            </tr>
        @endfor
    </table>
</div>
@endisset



@if(isset($analyticsData))
<div>
    <h2>Google Analytics Data</h2>
    <table class="table table stripped">
        <tr>
            <th>Date</th>
            <th>Page Title</th>
            <th>Visitors</th>
            <th>Page Views</th>
        </tr>
        @foreach($analyticsData as $data)
            <tr>
                <td>{{ $data['date']}}</td>
                <td>{{ $data['pageTitle'] }}</td>
                <td>{{ $data['visitors'] }}</td>
                <td>{{ $data['pageViews'] }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endif
@endsection