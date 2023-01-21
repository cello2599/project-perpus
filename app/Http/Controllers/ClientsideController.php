<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class ClientsideController extends Controller
{
    function index(){
        $data['buku'] = Buku::all();
        return view('clientside.list',$data);

    }


    function show(){
        $data['buku'] = Buku::orderBy('id_buku', 'desc')->paginate(5);
        //join table buku and genre
        $data['buku'] = Buku::join('kategori', 'buku.id_genre', '=', 'kategori.id_genre')->get();
        return view('clientside.home',$data);
    }

    //show detail book with id
   public function detail(Buku $data)
    {
        $data['buku'] = Buku::join('kategori', 'buku.id_genre', '=', 'kategori.id_genre')->get();
        return view('clientside/detail',compact('data'));
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
