<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Branch;
use App\Models\HomeActivityFirst;
use App\Models\HomeActivitySec;
use App\Models\ShortDesc;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\HomeBanner;
use App\Models\HomeProf;
use App\Models\HomeProfItem;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home',[
            "title" => "Home",
            "testimonials" => Testimonial::all(),
            "shortdescs" => ShortDesc::all(),
            "homebanners" => HomeBanner::all(),
            "homeprofs" => HomeProf::all(),
            "homeprof_items" => HomeProfItem::all(),
            "homeactivityfirsts" => HomeActivityFirst::all(),
            "homeactivitysecs" => HomeActivitySec::all(),
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "articles" => Artikel::all()
        ]);
    }

    public function showarticle(Artikel $article)
    {
        return view('front.article',[
            "title" => "Berita Terbaru",
            "contacts" => Contact::all(),
            "branches" => Branch::all(),
            "article" => $article
        ]);
    }
}
