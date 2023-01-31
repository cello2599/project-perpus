<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;


    function UploadImage()
    {
      
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "/public/image/book";
            $namagambar= $gambar->getClientOriginalName();
            //$randomStr = Str::random(5);
            //$filename = "book-" . time() . "-"  . $randomStr . "."  . $gambar->extension();
            //$filename = $namagambar . $gambar->extension();
            $filename = $namagambar;
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = $filename;
            $this->save();
        }

      
    }
}
