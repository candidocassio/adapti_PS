<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('movie.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('movies', 'public');
        
        $movie = Movie::create($data);
        return redirect(route('movie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function edit($id)
    {
        if(!$movie = Movie::find($id)){
            return redirect()->back();
        }

        $countries = Country::all();
        return view('movie.edit', compact('movie', 'countries'));
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
        $data = $request->all();
        $movie = Movie::find($id);

        if($request -> hasFile('image')){
            Storage::delete('public/' . $movie->image);
            $data['image'] = $request->file('image')->store('movies', 'public');
        }

        $movie->update($data);

        return redirect(route('movie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $FilmeDeletetar = Movie::find($id);
        $FilmeDeletetar->delete();

        return redirect('/movie.index'); //retornar para movie com os valores do banco de dados atualizados
    }


    
    public function search(Request $request)
    {
        //dd($request['search-item']);
        //dd($request);
        $movies = Movie::where([
            ['title', '!=', null],
            [function ($query) use ($request) {
                if(($term = $request['search-item']))  {
                    $query->Where('title', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('id', 'desc')
            ->paginate(20);
            //dd($FilmesMatchByTitle);
            return view('movie.index', compact('movies')); //enviar vetor com instancias pesquisadas para blade de search blade
    }

    public function rated()
    {
        $movies = Movie::orderBy('rating','desc')->get();
        
        return view('movie.index', compact('movies')); //enviar vetor com instancias pesquisadas para blade de search blade
    }


}