@extends('layouts.master')

@section('title')

<title>The Admin Page</title>

@endsection

@section('content')

<h1><b style="color:red;">Admin</b></h1>

@include('admin.grid')

@endsection