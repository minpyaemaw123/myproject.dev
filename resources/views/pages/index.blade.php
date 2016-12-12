@extends('layouts.master')
@section('title')
<title>My Sample Project</title>
@endsection
@section('content')
<ol class="breadcrumb">
	<li>
		<a href="#">home</a>
	</li>
</ol>

<div
class="fb-like"
data-share="true"
data-width="450"
data-show-faces="true">
</div>

<h1></h1>
@include('pages.slider')

<br><br>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotrom">
	<h1>My Sample Project</h1>
	<p>Use it as a starting point to create something more unique by
		building on or modifying it.</p>
	</div>
	@endsection
