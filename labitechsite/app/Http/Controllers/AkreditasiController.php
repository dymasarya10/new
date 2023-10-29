<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Branch;
use App\Models\Akreditasi;

class AkreditasiController extends Controller
{
    public function index()
    {
        return view('front.akreditasi',[
            "title" => "Akreditasi",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "akreditasicollections" => Akreditasi::all()
        ]);
    }
}