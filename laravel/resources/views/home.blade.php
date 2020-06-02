@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Movies</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($movies) > 1) 
                        @foreach ($movies as $movie)
                            <div class="well"> 
                                <h2>{{$movie->title}}</h2>
                            </div>
                        @endforeach
                    @else
                        <p>No movies found! </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
