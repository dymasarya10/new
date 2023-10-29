<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Contact;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('front.kontak', [
            "title" => "Kontak",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
        ]);
    }
}
