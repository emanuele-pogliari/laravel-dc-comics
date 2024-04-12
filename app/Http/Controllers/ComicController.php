<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
        return view('comic.index', compact('comics', 'links', 'footerLinks', 'socials', 'footerLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $links = config("db.links");
        $footerLinks = config("db.linkList");
        $socials = config("db.socials");

        return view('comic.create', compact('links', 'footerLinks', 'socials', 'footerLinks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // creiamo una nuova pasta

        // dd($request);

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

        // spostiamo l'utente nella index
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

        return view('comic.show', compact('comic', 'links', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
