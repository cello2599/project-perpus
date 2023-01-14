<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $data['buku'] = Buku::all();
        return view('serverside.master', $data);
    }

    public function create()
    {
        return view('serverside.create');
    }

    public function store(Request $request)
    {
        $data = new Buku;
        $data->judul_buku = $request->judul_buku;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->id_genre = $request->id_genre;
        $data->save();
        return redirect()->route('buku.index');
    }

    public function show($id)
    {
        $data = Buku::where('id_buku', $id)->first();
        return view('serverside.detail', $data);
    }

    public function edit($id)
    {
        $data = Buku::where('id_buku', $id)->first();
        return view('serverside.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = Buku::where('id_buku', $id)->first();
        $data->judul_buku = $request->judul_buku;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->id_genre = $request->id_genre;
        $data->save();
        return redirect()->route('buku.index');
    }

    public function destroy($id)
    {
        $data = Buku::where('id_buku', $id)->first();
        $data->delete();
        return redirect()->route('buku.index');
    }

    public function search(Request $request)
    {
        $data = Buku::where('judul_buku', 'like', "%".$request->search."%")->get();
        return view('serverside.master', $data);
    }


}
