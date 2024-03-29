<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
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
        // dd($comics);
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
    public function store(StoreComicRequest $request)
    {
        // dd($request->all());
        $form_data = $request->validated();
        // dd($form_data);
        // lui prende i nomi dei campi da name

        $comic = new Comic();
        // $comic->title = $form_data['title'];
        // $comic->thumb = $form_data['thumb'];
        // $comic->series = $form_data['series'];
        // $comic->sale_date = $form_data['sale_date'];
        // $comic->price = $form_data['price'];
        // $comic->type = $form_data['type'];
        // $comic->description = $form_data['description'];

        // Fill
        $comic->fill($form_data);
        
        $comic->save();

       // Rindirizzamento alla pagina show
       return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $comic = Comic::findOrFail($id);
        // dd($comic->title);
        return view('comics.show', compact('comic'));
        // nel compact passo nome della variabile che voglio passare alla view ($comic)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $comic = Comic::findOrFail($id);
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Due parametri: request per prendere i dati, id perchè -> singolo comic
     */
    public function update(UpdateComicRequest $request, $id)
    {
        $form_data = $request->validated();
        $comic_to_update = Comic::findOrFail($id);
        // dd($form_data, $comic_to_update); 
        // Fill
        $comic_to_update->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('message', 'Record deleted: ' . $comic->title);
    }
}
