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

        return view('comics.index', compact('comics'));
        // dd($comics);
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
        $params = $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|numeric',
            'series' => 'required|max:200',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:30',
        ]);
        // dd($request->all());
        // $c = new Comic();
        // $c->fill($params);
        // $c->save();
        $c = Comic::create($params);
        // dd($c);
        return redirect()->route('comics.show', $c);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
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
        $comic = Comic::findOrFail($id);

        $params = $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|numeric',
            'series' => 'required|max:200',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:30',
        ]);

        $comic->update($params);

        return redirect()->route('comics.show', $comic);
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
