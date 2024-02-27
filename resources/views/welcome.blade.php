@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $index => $movie )
                    <div class="col-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">Title: {{$movie->title}}</p>
                                <p class="card-text">Original title: {{$movie->original_title}}</p>
                                <p class="card-text">Nationality: {{$movie->nationality}}</p>
                                <p class="card-text">Date: {{$movie->date}}</p>
                                <p class="card-text">Vote: {{$movie->vote}}</p>
                                <a href="{{ route('show', ['id' => $movie->id]) }}" class="btn btn-primary">
                                    Go to Movie
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    
@endsection
