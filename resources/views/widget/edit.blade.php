@extends('layouts.master')

@section('title')
<title>Edit Widget</title>
@endsection

@section('content')
<ol class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li><a href="/widget">Widgets</a></li>
	<li><a href="/widget/{{$widget->id}}">{{$widget->name}}</a></li>
	<li><a href="active">Edit</a></li>
</ol>

<h1>Edit Widget</h1>

<hr>

<form action="{{url('/widget/'.$widget->id)}}" method="POST"
 role="form" class="form">

	<input type="hidden" name="_method" value="patch">

	{{csrf_field()}}

	<!-- name Form input -->

	<div class="form-group{{$errors->has('name') ? 'has-error' : ''}}">
		
		<label for="" class="control-label">Widget Name</label>

		<input type="text" name="name" value="{{$widget->name}}" class="from-control">

		@if($errors->has('name'))

		<span class="help-block">
			<strong>{{$errors->first('name')}}</strong>
		</span>

		@endif

	</div>

	<div class="from-group">
		<button type="submit" class="btn btn-primary btn-lg">Edit</button>
	</div>

</form>
@endsection