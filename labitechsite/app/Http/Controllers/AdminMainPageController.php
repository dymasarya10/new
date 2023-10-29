<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Branch;
use App\Models\HomeBanner;
use App\Models\Testimonial;
use App\Models\HomeProf;
use App\Models\HomeProfItem;
use App\Models\HomeActivitySec;
use App\Models\HomeActivityFirst;
use App\Models\Artikel;

class AdminMainPageController extends Controller
{
    // BRANCHES START
    public function jumlahsekolah()
    {
        return view('admin.admbranches',[
            'heading' => 'Jumlah Sekolah',
            'collection' => Branch::all()
        ]);
    }

    public function createbranches(Request $request)
    {
        $branch = new Branch;
        $branch->nama_cabang = $request->nama_cabang;
        $branch->link = $request->link;

        $branch->save();

        return redirect('/admbranches');
    }

    public function deletebranches($id)
    {
        $branch = Branch::find($id);
        $branch->delete();

        return redirect('/admbranches');
    }

    public function updatebranches($id, Request $request)
    {
        $branch = Branch::find($id);
        $branch->update([
            'nama_cabang' => $request->branches_name,
            'link' => $request->branches_link
        ]);
        return redirect('/admbranches');
    }
    // BRANCHES END

    // BANNER START
    public function banner()
    {
        return view('admin.admbanner',[
            'heading' => 'Banner',
            'collection' => HomeBanner::all()
        ]);
    }
    public function updatebanner($id, Request $request)
    {
        $request->file('bannerImage')->store('bannerImages');
        $banner = HomeBanner::find($id);
        $banner->update([
            'gambar_banner' => $request->file('bannerImage')->store('bannerImages')
        ]);
        return redirect('/admbanner');
    }
    // BANNER END

    // TESTIMONIALS START
    public function testimonials()
    {
        return view ('admin.admtestimon',[
            'heading' => 'Testimonial',
            'collection' => Testimonial::all()
        ]);
    }

    public function createtestimonials(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->nama = $request->name;
        $testimonial->pekerjaan = $request->job;
        $testimonial->ulasan = $request->rating;
        $testimonial->foto = $request->file('profImage')->store('testimonprof');

        $testimonial->save();

        return redirect('/admtestimon');
    }

    public function updatetestimonials($id, Request $request)
    {
        if($request->file('profImage') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('profImage')->store('testimonprof');
        }
        $testimonial = Testimonial::find($id);
        $testimonial->update([
            'nama' => $request->testimon_name,
            'pekerjaan' => $request->testimon_pekerjaan,
            'ulasan' => $request->testimon_rating,
            'foto' => $image
        ]);
        return redirect('/admtestimon');
    }

    public function deletetestimonials($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect('/admtestimon');
    }
    // TESTIMONIALS END

    // PROMOTION START
    public function promotion()
    {
        return view ('admin.admpromotion',[
            'heading' => 'Promosi',
            'collection' => HomeProf::all(),
            'items' => HomeProfItem::all(),
        ]);
    }

    public function promotionHeroUpdate($id, Request $request)
    {
        if($request->file('promotionImage') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('promotionImage')->store('promotionpict');
        }
        $testimonial = HomeProf::find($id);
        $testimonial->update([
            'title' => $request->promotion_title,
            'desc' => $request->promotion_desc,
            'pict' => $image
        ]);
        return redirect('/admpromotion');
    }

    public function promotionChildCreate(Request $request)
    {
        $childProm = new HomeProfItem;
        $childProm->keunggulan = $request->item;
        $childProm->icon = $request->icon;

        $childProm->save();

        return redirect('/admpromotion');
    }

    public function promotionChildUpdate($id, Request $request)
    {
        $childProm = HomeProfItem::find($id);
        $childProm->update([
            'keunggulan' => $request->title,
            'icon' => $request->classIcon,
        ]);
        return redirect('/admpromotion');
    }

    public function promotionChildDelete($id)
    {
        $childProm = HomeProfItem::find($id);
        $childProm->delete();

        return redirect('/admpromotion');
    }
    // PROMOTION END

    // PICTHOME START
    public function homePict()
    {
        return view ('admin.admhomepict',[
            'heading' => 'Roll Foto Kedua',
            'collection' => HomeActivitySec::all(),
        ]);
    }
    public function createHomePict(Request $request)
    {
        $homepict = new HomeActivitySec;
        $homepict->title = $request->title;
        $homepict->pict = $request->file('pict')->store('homephotos');
        $homepict->shortdesc = $request->shortdesc;
        $homepict->link = "masih belom butuh";

        $homepict->save();

        return redirect('/admhomepict');
    }

    public function updateHomePict($id, Request $request)
    {
        if($request->file('promotionImage') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('promotionImage')->store('promotionpict');
        }
        $homepict = HomeActivitySec::find($id);
        $homepict->update([
            'title' => $request->title,
            'shortdesc' => $request->shortdesc,
            'pict' => $image
        ]);
        return redirect('/admhomepict');
    }

    public function DeleteHomePict($id)
    {
        $homepict = HomeActivitySec::find($id);
        Storage::delete($homepict->pict);
        $homepict->delete();

        return redirect('/admhomepict');
    }
    // PICTHOME END

    // VIDEO START
    public function video()
    {
        return view ('admin.admvideo',[
            'heading' => "Roll Foto Pertama",
            'collection' => HomeActivityFirst::all()
        ]);
    }

    public function storefirstroll(Request $request)
    {
        $rollfirst = new HomeActivityFirst;
        $rollfirst->pict = $request->file('pict')->store('homephotos2');

        $rollfirst->save();

        return redirect('/admvideo');
    }

    public function editfirstroll($id, Request $request)
    {
        if($request->file('pict') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('pict')->store('homephotos2');
        }
        $homepict = HomeActivityFirst::find($id);
        $homepict->update([
            'pict' => $image
        ]);

        return redirect('/admvideo');
    }

    public function deletefirstroll($id)
    {
        $homepict = HomeActivityFirst::find($id);
        Storage::delete($homepict->pict);
        $homepict->delete();

        return redirect('/admvideo');
    }
    // VIDEO END

    // ARTIKEL START
    public function article()
    {
        return view ('admin.admarticle',[
            'heading' => 'Artikel',
            'collection' => Artikel::all(),
        ]);
    }
    // ARTIKEL END


}
