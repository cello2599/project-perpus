<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
class KategoriController extends Controller
{
    // show all data
    public function index()
    {
        $data['kategori'] = kategori::all();
        return view('serverside/kategori', $data);
    }

    // show form add data
    public function create()
    {
        return view('serverside/addkategori');
    }

    // add data
    public function store(Request $request)
    {
        $save = new kategori;
        $save->nama_genre = request('nama_genre');
        $save->save();
        return redirect('serverside/kategori');
    }

}
