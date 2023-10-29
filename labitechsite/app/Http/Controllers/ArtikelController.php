<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('front.articles',[
            "title" => "Berita Terbaru",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "articles" => Artikel::all()
        ]);
    }
}
