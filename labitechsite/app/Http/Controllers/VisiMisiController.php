<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {
        return view('front.visimisi',[
            "title" => "Maju Bersama Labitech",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "visimisicollections" => VisiMisi::all() 
        ]);
    }
}
