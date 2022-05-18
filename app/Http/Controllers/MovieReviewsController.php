<?php

namespace App\Http\Controllers;
use App\Models\MovieReviews;
use Illuminate\Http\Request;

class MovieReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moviereviews = MovieReviews::all();
        $moviereviews = MovieReviews::orderBy('updated_at','DESC')->paginate(5);
        return view ('moviereview')->with('moviereviews', $moviereviews);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moviereviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        MovieReviews::create($input);
        return redirect('moviereview')->with('flash_message', 'Movie Review Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moviereviews = MovieReviews::find($id);
        return view('moviereviews.show')->with('moviereviews', $moviereviews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moviereviews = MovieReviews::find($id);
        return view('moviereviews.edit')->with('moviereviews', $moviereviews);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $moviereviews = MovieReviews::find($id);
        $input = $request->all();
        $moviereviews->update($input);
        return redirect('moviereview')->with('flash_message', 'Movie Review Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MovieReviews::destroy($id);
        return redirect('moviereview')->with('flash_message', 'Movie Review deleted!'); 
    }
}