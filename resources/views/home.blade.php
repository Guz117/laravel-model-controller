@extends('layout.base')

@section('content')
<h1>MOVIES</h1>
<div class="cards">
    @foreach ($movies as $movie)
        <div class="card-movie">
            <h2>{{ $movie->title }}</h2>
            <h3>{{ $movie->original_title }}</h3>
            <p>Nationality: <span>{{ $movie->nationality }}</span></p>
            <p>{{  date_format(date_create($movie->date),'M d Y') }}</p>
            <p>Vote: {{ $movie->vote }}</p>
        </div>
    @endforeach
</div>
@endsection