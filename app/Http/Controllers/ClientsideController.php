<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class ClientsideController extends Controller
{
    function index(){
        $data['buku'] = Buku::all();
        return view('clientside.home',$data);

    }


    function show(){
        $data['buku'] = Buku::orderBy('id_buku', 'desc')->paginate(10);
        //join table buku and genre
        $data['buku'] = Buku::join('kategori', 'buku.id_genre', '=', 'kategori.id_genre')->get();
        return view('clientside.home',$data);
    }

    //show detail book with id
   public function detail($id)
    {
        $data['buku'] = Buku::where('id_buku',$id)->first();
        //join table buku and genre
        $data['buku'] = Buku::join('kategori', 'buku.id_genre', '=', 'kategori.id_genre')->get();
        return view('clientside/detail',$data);
    }


    function about(){
        return view('clientside.about');
    }

    function search(request $request){
        $data['buku'] = Buku::where('judul_buku', 'like', "%".$request->search."%")->get();
        return view('clientside.home',$data);
    }

    function genre(request $request){
        $data['buku'] = Buku::where('id_genre', $request->id)->get();
        return view('clientside.home',$data);
    }
    
}
