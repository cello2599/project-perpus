<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $data['buku'] = Buku::all();
        return view('serverside/master', $data);
    }

    public function create()
    {
        return view('serverside.add');
    }

    public function store(Request $request)
    {
        $save = new Buku;
        $save->judul_buku = request('judul_buku');
        $save->sinopsis = request('sinopsis');
        $save->id_genre = request('id_genre');
        $save->UploadImage();
        $save->save();
        return redirect('serverside/master');
    }

    public function update(Request $request, $id)
    {
        $data = Buku::where('id_buku', $id)->first();
        $data->judul_buku = $request->judul_buku;
        $data->sinopsis = $request->sinopsis;
        $data->id_genre = $request->id_genre;
        $data->UploadImage();
        $data->save();
        return redirect('serverside/master');
    }


    public function show($id)
    {
        $data = Buku::where('id_buku', $id)->first();
        return view('serverside.detail', $data);
    }

    public function edit($id)
    {
        $data['buku'] = Buku::where('id_buku', $id)->first();
        return view('serverside.edit', $data);
    }

    

    public function destroy($id)
    {
        $data = Buku::where('id_buku', $id)->first();
        $data->delete();
        return redirect('serverside/master');
    }

    function delete(Buku $data)
  {
    Buku::destroy($data->id_buku);
    return redirect('serverside/master')->with('success', 'Buku berhasil di hapus');
  }

    public function search(Request $request)
    {
        $data = Buku::where('judul_buku', 'like', "%".$request->search."%")->get();
        return view('serverside.master', $data);
    }


}
