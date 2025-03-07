<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $penulis = Penulis::all();
        return view('blog.index', ['penulis' => $penulis]);
    }

    public function tentang() {
        return view('blog.tentang');
    }

    public function kontak() {
        return view('blog.kontak');
    }
}
