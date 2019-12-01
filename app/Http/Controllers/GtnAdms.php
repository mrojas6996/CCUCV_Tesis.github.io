<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GtnAdms extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //PÁGINA DE INICIO, ES EL NOMBRE DEL ARCHIVO DE LAS VISTAS, LO DEMÁS ES LA RUTA
        $adms = User::all();
        return view('/MenuUsr/GtnAdmins', compact('adms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MenuUsr.Creates.UsrAdmCreate');
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

            'role' => 'required',
            'name'=>'required',
            'email'=>'required'

        ]);

        $adms = new User([

            'role' => $request -> get('role'),
            'name' => $request -> get ('name'),
            'email' => $request -> get('email'),
            'is_Admin' => $request -> get('is_Admin')

        ]);

            //COMPROBADOR DE CHECKS

        if($request->get('is_Admin') == null){

            $adms['is_Admin'] = 0;

            if($request->get('role') == "admin"){
                $adms['role'] = "user";
                $url= '/Dashboard/GtnUsrs';
            }
            
        } else {
          $adms['is_Admin'] = request('is_Admin');
          $adms['role'] = "admin";
          $url= '/Dashboard/GtnAdmin';
        }

        if ($request->get('role') == "mod") {
            $url= '/Dashboard/GtnMods';
        }

        if ($request->get('role') == "user") {
            $url= '/Dashboard/GtnUsrs';
        }

        $adms->save();
        return redirect($url) -> with('success', 'Guardado exitoso');
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
        $adms = User::find($id);
        $url = '/Dashboard/GtnAdmin';

        if ($adms->email == 'administrador@admin.com'){
            return redirect($url)->with('success','No modificable');
        } else {
        return view('MenuUsr.Modifs.UsrAdmModif', compact('adms'));
        };
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

            'role' => 'required',
            'name' => 'required',
            'email' => 'required'

        ]);

        $adms = User::find($id);
        $adms -> role = $request->get('role');
        $adms -> name = $request->get('name');
        $adms -> email = $request->get('email');
        
        //COMPROBADOR DE CHECKS

        if($request->get('is_Admin') == null){

            $adms['is_Admin'] = 0;

            if($request->get('role') == "admin"){
                $adms['role'] = "user";
                $url= '/Dashboard/GtnUsrs';
            }
            
        } else {
          $adms['is_Admin'] = request('is_Admin');
          $adms['role'] = "admin";
          $url = '/Dashboard/GtnAdmin';
        }

        if ($request->get('role') == "mod") {
            $url= '/Dashboard/GtnMods';
        }

        if ($request->get('role') == "user") {
            $url= '/Dashboard/GtnUsrs';
        }

        $adms->save();

        return redirect($url)->with('success', 'Actualizado exitoso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adms = User::find($id);
        $url = '/Dashboard/GtnAdmin';

        if ($adms->email == 'administrador@admin.com'){
            return redirect($url)->with('success','No modificable');
        } else {

        $adms -> delete();

        return redirect()-> back() ->with('success', 'Eliminado exitoso');
        };
    }
}
