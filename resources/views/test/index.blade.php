@extends('layouts.master')
@section('title')
@section('content')
<h1>This is my best page.</h1>
<br>
@if(count($Beatles>0))
@foreach($Beatles as $Beatle)

{{$Beatle}}<br>

@endforeach

@else

<h2>Sorry! Nothing to show..</h2>

@endif

@endsection