@extends('layouts.layout')

@section('content')
<div class="container">

    <h1>Hello, this is Zack's movie review page!</h1>
    <h2>View or add my movie reviews!</h2>

    <div class="row">
        <div class="col-md-9">
            <div class="card" id="moviereviewtable">
                <div class="card-body"> 
                    <a href="{{ url('/moviereview/create') }}" class="btn btn-success btn-sm" title="Add New Movie Review">
                    <i class="fa fa-plus" aria-hidden="true"></i> 
                        Add New Movie Review
                    </a>
                    <br/>
                    <br/>
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Movie Name</th>
                                        <th>Category</th>
                                        <th>Score * (0-100)</th>
                                        <th>Comments</th>
                                        <th>Date of Review</th>
                                        </tr>
                                </thead>
                            <tbody>
                                @foreach($moviereviews as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->moviename }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->score }}</td>
                                        <td>{{ $item->comments }}</td>
                                        <td>{{ $item->dateofreview }}</td>
                                        <td>
                                            <a href="{{ url('/moviereview/' . $item->id) }}" title="View Movie Review"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/moviereview/' . $item->id . '/edit') }}" title="Edit Movie Review"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/moviereview' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Movie Review" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div id="pagination">
                        {{ $moviereviews->links('pagination::bootstrap-4') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





