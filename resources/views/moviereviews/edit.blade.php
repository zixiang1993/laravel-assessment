@extends('layouts.layout')

@section('content')

<div class="card" id="editmoviereviewtable">
  <div class="card-header">Edit Existing Movie Review Page</div>
  <div class="card-body">
      
      <form action="{{ url('moviereview/' .$moviereviews->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$moviereviews->id}}" id="id" />

        <label>Movie Name</label></br>
        <input type="text" name="moviename" id="moviename" value="{{$moviereviews->name}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="{{$moviereviews->category}}" class="form-control"></br>
        <label>Score * (0-100)</label></br>
        <input type="text" name="score" id="score" value="{{$moviereviews->score}}" class="form-control"></br>
        <label>Comments</label></br>
        <input type="text" name="comments" id="comments" value="{{$moviereviews->comments}}" class="form-control"></br>
        <label>Date of Review</label></br>
        <input type="text" name="dateofreview" id="dateofreview" value="{{$moviereviews->dateofreview}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop