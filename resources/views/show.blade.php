@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1>
    {{ $movie->title }}
</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>
                    {{ $movie->title }}
                </h3>

                <p>
                    {{ $movie->vote }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
