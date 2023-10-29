<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Branch;
use App\Models\Aplikasi;

class AplikasiController extends Controller
{
    public function index()
    {
        return view('front.aplikasi',[
            "title" => "Aplikasi",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "apps" => Aplikasi::all(),
        ]);
    }
}
