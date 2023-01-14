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

    function about(){
        return view('clientside.about');
    }

    function detail(request $request){
        $data['buku'] = Buku::where('id_buku', $request->id)->first();
        return view('clientside.detail',$data);
    }

    function search(request $request){
        $data['buku'] = Buku::where('judul_buku', 'like', "%".$request->search."%")->get();
        return view('clientside.home',$data);
    }

    function genre(request $request){
        $data['buku'] = Buku::where('id_genre', $request->id)->get();
        return view('clientside.home',$data);
    }

    // Show book with 10 limit
    function show(){
        $data['buku'] = Buku::paginate(10);
        //join table buku and genre
        $data['buku'] = Buku::join('kategori', 'buku.id_genre', '=', 'kategori.id_genre')->get();
        return view('clientside.home',$data);
    }
}
