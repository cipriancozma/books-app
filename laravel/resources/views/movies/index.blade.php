@extends('layouts.app')


@section('content')
    @if(count($movies) > 0) 
            @foreach ($movies as $movie)
                    <div class="well"> 
                        <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
                    </div>
                @endforeach
                {{ $movies->links() }}
                    @else
                        <p>No movies found! </p>
                    @endif
@endsection