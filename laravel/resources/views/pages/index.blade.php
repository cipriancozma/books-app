@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p><a class="btn btn-dark btn-lg btn-outline-success my-2 my-sm-0" href="/login" role="button">Login</a> <a class="btn btn-secondary btn-lg btn-outline-success my-2 my-sm-0" href="/register" role="button">Register</a></p>
</div>

@endsection
      
