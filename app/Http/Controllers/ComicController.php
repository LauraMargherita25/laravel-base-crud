<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    // public function index()
    // {
    //     $houses = House::paginate(15); //where('available_date', '=', date('Y-m-d'))->get();

    //     return view('houses.index', compact('houses'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

        $request->validate([
            'thumb' => 'required|url',
            'title' => 'bail|required|unique:comics|max:100',
            'description' => 'required',
            'price'=> 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:80',
        ]);

        $formData = $request->all();
        $newComic = Comic::create($formData);
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', [
            'pageTitle' => $comic->title,
            'comic'     => $comic,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    
     public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    
     public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    
     public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
