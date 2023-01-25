@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @foreach ($allMovies as $movies)
            <div class="card m-5 p-3">
                <ul>
                    <li>{{ $movies->title }}</li>
                    <li>{{ $movies->nationality }}</li>
                    <li>{{ $movies->date }}</li>
                    
                </ul>
            </div>
        @endforeach
    </div>

</div>
@endsection