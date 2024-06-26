<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Contracts\Cache\Store;
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
    public function store(StoreComicRequest $request)
    {

        // this will call the validation function
        // $this->validation($request->all());

        $request->validated();

        $newComic = new Comic();

        $newComic->fill($request->all());

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
    public function update(StoreComicRequest $request, Comic $comic)
    {

        $request->validated();


        $comic->update($request->all());
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
}
