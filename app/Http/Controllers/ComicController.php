<?php

namespace App\Http\Controllers;

use App\Card;
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
        $comics = Card::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('comics.create');
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
            'title'=>'required|unique:post|max:400',
            'description' =>'required|min:20',
            'thumb'=>'required|url',
            'price'=>'required|numeric',
            'series'=>'required',
            'sale_date'=>'required|date_format:Y-m-d',
            'type'=>'required'
        ]); 

       $data = $request->all();

       $newCard = new Card();
       $newCard->title = $data['title'];
       $newCard->description = $data['description'];
       $newCard->thumb = $data['thumb'];
       $newCard->price = $data['price'];
       $newCard->series = $data['series'];
       $newCard->sale_date = $data['sale_date'];
       $newCard->type = $data['type'];
       $newCard->save();
    
        return redirect()->route('comics.show', $newCard->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Card $comic)
    {
     /*    $comic = Card::find($id); */

        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $comic)
    {
        $request->validate([
            'title'=>'max:400',
            'description' =>'min:20',
            'thumb'=>'url',
            'price'=>'numeric',
            'sale_date'=>'date_format:Y-m-d',

        ]);
    
        $comic->update($request->all());
    
        return redirect()->route('comics.index')
                        ->with('success','Comic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
