<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();


        $links = config("db.links");
        $footerLinks = config("db.linkList");
        $socials = config("db.socials");
        return view('comics.index', compact('comics', 'links', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $links = config("db.links");
        $footerLinks = config("db.linkList");
        $socials = config("db.socials");

        return view('comics.create', compact('links', 'footerLinks', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // this will call the validation function
        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $links = config("db.links");
        $footerLinks = config("db.linkList");
        $socials = config("db.socials");

        return view('comics.show', compact('comic', 'links', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $links = config("db.links");
        $footerLinks = config("db.linkList");
        $socials = config("db.socials");

        return view('comics.edit', compact('comic', 'links', 'footerLinks', 'socials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request->all());

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }


    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:50',
            'description' => 'max:2000',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required|max:70',
            'sale_date' => 'date',
            'type' => 'max:30',
            'artist' => 'max:500',
            'writers' => 'max:500',
        ], [
            'max' => "Il campo :attribute deve avere massimo :max caratteri",
            'required' => "Il campo :attribute deve essere inserito",
            'date' => "Il campo :attribute deve essere in questo formato: YYYY-MM-DD",

        ])->validate();
    }
}
