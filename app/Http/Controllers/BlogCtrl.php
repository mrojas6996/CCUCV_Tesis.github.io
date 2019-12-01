<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\Auth;

//Inspirado en: http://blog.nubecolectiva.com/como-crear-un-crud-con-laravel-5-6-parte-1/

class BlogCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Blog::with('Autor')-> orderBy('id', 'DESC')->paginate(5);

        return View('Blog/indexDsh')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Blog.crtArt');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blgArt = new Blog([

            'titulo' => $request -> get('titulo'),
            'contenido' => $request -> get ('contenido'),
            'idAutor' => Auth::user()->id

        ]);

        $url='/Dashboard/blog';

        $blgArt->save();
        return redirect($url) -> with('success', 'Entrada Añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blgArt = Blog::find($id);
        return view('Blog.artsSimp', compact('blgArt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blgArt = Blog::find($id);
        return view('blog.mdfArt', compact('blgArt'));
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
        $blgArt = Blog::find($id);
        $blgArt -> titulo = $request->get('titulo');
        $blgArt -> contenido = $request->get('contenido');

        $url='/Dashboard/blog';

        $blgArt->save();
        return redirect($url) -> with('success', 'Entrada Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blgArt = Blog::find($id);
        $blgArt -> delete();

        return redirect()-> back() ->with('success', 'Entrada Eliminada');
    }
}
