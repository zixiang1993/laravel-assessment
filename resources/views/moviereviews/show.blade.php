@extends('layouts.layout')

@section('content')

<div class="card" id="showmoviereview">
<div class="card-body">
  
        <div class="card-body">
            <h3 class="card-title">Movie Name : {{ $moviereviews->moviename }}</h3>
            <p class="card-text">Category  : {{ $moviereviews->category }}</p>
            <p class="card-text">Score * (0-100) : {{ $moviereviews->score }}</p>
            <p class="card-text">Comments : {{ $moviereviews->comments }}</p>
            <p class="card-text">Date of Review : {{ $moviereviews->dateofreview }}</p>
        </div>
        </hr>

</div>
</div>