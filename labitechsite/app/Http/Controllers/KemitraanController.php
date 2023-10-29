<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Branch;
use App\Models\Kemitraan;
use App\Models\PartProgram;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    public function index()
    {
        return view('front.kemitraan',[
            "title" => "Kemitraan",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "partnerships" => Kemitraan::all(),
            "partnershipprograms" => PartProgram::all()
        ]);
    }
}
