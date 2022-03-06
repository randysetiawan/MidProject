<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function viewCreate() {
        return view('create');
    }

    public function create(Request $request) {
        $path =
        $request->file('gambar')->store('public/book_images');
        Book::create([
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'author' => $request->penulis,
            'image' => str_replace("public/book_images/","","$path")
        ]);
        64
        return redirect('show');
    }
}
