@extends('layouts.layout')

@section('content')
    <div>
        <h1>This is the home page for Zack's personal movie review app!</h1>
        <h2>Click the button below to write some movie reviews!</h2>
            <img id="movie_review" src="img/movie_review.jpg" alt="movie_review">
        <div id=gotobutton>
            <button>
                <a class="buttontext" href="/moviereview">Go to my movie review page!</a>
            </button>   
        </div>
    </div>
@endsection