<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\historiaCoro;
use App\presentCoro;
use App\fotoData;


class PagesController extends Controller
{

	// EL BLOG

    public function blogCoros(){
        $atcs = Blog::with('Autor')-> orderBy('id', 'DESC')->paginate(3);
        $foto = fotoData::all();
        return view('CorosWeb.indexCoros')->with('atcs', $atcs)->with('foto',$foto);
    }

    //LA SECCION 'SOBRE NOSOTROS'

    public function histCoros($histLinks = null){
    	$histLink=['hist', 'mv', 'val', 'recs'];
        $text = historiaCoro::all();
        $foto = fotoData::all();
    	return view('CorosWeb.historiaCoros', compact('histLink', 'histLinks'))->with('texts', $text)>with('foto',$foto);
    }

    public function resDir(){
        return;
    }

    public function docs($docs = null){
        return view('MenuDocs.gdrive', compact('docs', $docs));
    }

}
