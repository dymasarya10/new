<?php

namespace App\Http\Controllers;

use App\Models\LayananKarir;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Contact;

class LayananKarirController extends Controller
{
    public function index()
    {
        return view('front.layanankarir',[
            "title" => "Layanan Karir",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "vacancies" => LayananKarir::all()
        ]);
    }
}
