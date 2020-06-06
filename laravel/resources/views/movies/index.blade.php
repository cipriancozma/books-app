@extends('layouts.app')


@section('content')
<h1>Movies<h1>
    @if(count($movies) > 0) 
            @foreach ($movies as $movie)
                    <div class="well"> 
                        <h2><a href="/movies/{{$post->id}}">{{$post->title}}</a></h2>
                    </div>
                @endforeach
                {{ $movies->links() }}
                    @else
                        <p>No movies found! </p>
                    @endif
@endsection