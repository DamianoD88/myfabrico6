<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //la index mi fa vedere tutti i prodotti
    public function index()
    {
        // per visualizzare tutti i dati come facciamo?
        // variabile posts = a tutti i post
        $posts = Post::all();
        // mi andrò a prendere la index in view dentro admin dentro posts 
        //compact('posts') sto passando tutti gli arrey nell'index.blade.php
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //create mi fa creare i prodotti/ inserire dati
    public function create()
    {
        
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // lo store mi consente di inserire il prodotto
    public function store(Request $request)
    {
        //qui programmo l'inserimento del testo con submit della pagina create, mi vado a prendere tutti i dati che ottengo con la request, e li vado a mettere in una variabile(prendo i dati)
        $data = $request->all();
        //prendiamo poi i dati da post.php(creo la nuova istanza con i dati ottenuti dalla request)
        $new_post = new Post();
        //creo anche lo slug
        $new_post->slug = Str::slug($data['title'], '-');
        $new_post->fill($data);

        
        //salvo i dati
        $new_post->save();

        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // lo show mi consente di vedere solo un prodotto
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // la edit di modificare quel prodotto
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // destroy per eliminare il prodotto
    public function destroy($id)
    {
        //
    }
}
