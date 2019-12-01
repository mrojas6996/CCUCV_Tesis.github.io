<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fotoData;

class fotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = fotoData::all();
        return view('/MenuDocs/fotoInx', compact('foto'));//->with($fotoInx);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MenuDocs.fotoCrt');
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

            'titulo' => 'required',
            'URL' => 'required'

        ]);

        $foto = new fotoData([

            'seccion' => $request-> input('seccion'),
            'titulo' => $request-> input('titulo'),
            'URL' => $request-> input('URL')
        ]);

        $foto->save();
        return redirect('Dashboard/fotoMod')-> with('success', 'Foto añadida');
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
        $foto = fotoData::find($id);
        return view('MenuDocs.fotoMdf', compact('foto'));
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
        $request->validate([

            'titulo' => 'required',
            'URL' => 'required'

        ]);

        $foto = fotoData::find($id);

        $foto->titulo = $request-> input('titulo');
        $foto->seccion = $request-> input('seccion');
        $foto->URL = $request-> input('URL');
        

        $foto->save();
        return redirect('/Dashboard/fotoMod')-> with('success', 'Foto actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = fotoData::find($id);
        $foto->delete();

        return redirect()-> back()-> with('success', 'Foto borrada');
    }
}
