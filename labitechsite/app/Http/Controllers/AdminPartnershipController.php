<?php

namespace App\Http\Controllers;

use App\Models\Kemitraan;
use App\Models\PartProgram;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminPartnershipController extends Controller
{

    // HEADER START
    public function admheader()
    {
        return view('admin.admheader', [
            'heading' => 'Header Kemitraan',
            'collection' => Kemitraan::all()
        ]);
    }

    public function updateheader($id, Request $request)
    {
        if($request->file('pictheader') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('pictheader')->store('pnsheader');
        }
        $headerupd = Kemitraan::find($id);
        $headerupd->update([
            'title' => $request->title,
            'pictheader' => $image
        ]);

        return redirect('/admlab/admheader');
    }
    // HEADER END

    // VIDEO START
    public function admvideo()
    {
        return view('admin.admpartvideo', [
            'heading' => 'Video',
            'collection' => Kemitraan::all()
        ]);
    }

    public function updateadmvideo($id, Request $request)
    {
        $link = $request->linkvid;
        $link = str_replace("https://www.youtube.com/watch?v=", "", $link);

        $vid = Kemitraan::find($id);
        $vid->update([
            'titlevid' => $request->titlevid,
            'shortdescvid' => $request->shortdescvid,
            'linkvid' => $link,
            'link' => $request->link
        ]);

        return redirect('/admlab/admvideo');
    }
    // VIDEO END

    // PROGRAM START
    public function admprogram()
    {
        return view('admin.admprogram', [
            'heading' => 'Program Kemitraan',
            'collection' => PartProgram::all()
        ]);
    }

    public function createprogram(Request $request)
    {
        $partprog = new PartProgram;
        $partprog->name = $request->name;
        $partprog->shortdesc = $request->shortdesc;
        $partprog->pict = $request->file('pict')->store('partprogramImg');

        $partprog->save();

        return redirect('/admlab/admprogram');
    }

    public function deletepartprogram($id)
    {
        $partprog = PartProgram::find($id);
        Storage::delete($partprog->pict);
        $partprog->delete();

        return redirect('/admlab/admprogram');
    }

    public function updatepartprogram($id, Request $request)
    {
        $image;
        if($request->file('pict') === null){
            $image = $request->oldImage;
        } else{
            Storage::delete($request->oldImage);
            $image = $request->file('pict')->store('partprogramImg');
        }
        $partprog = PartProgram::find($id);
        $partprog->update([
            'name' => $request->name,
            'shortdesc' => $request->shortdesc,
            'pict' => $image
        ]);

        return redirect('/admlab/admprogram');
    }
    // PROGRAM END

    // BANNER START
    public function admbanner()
    {
        return view('admin.admbannerPart', [
            'heading' => 'Banner Footer',
            'collection' => Kemitraan::all()
        ]);
    }

    public function updatebanner($id, Request $request)
    {
        $image;
        if($request->file('pict') === null){
            $image = $request->oldImage;
        } else{
            Storage::delete($request->oldImage);
            $image = $request->file('pict')->store('pnsheader');
        }
        $partprog = Kemitraan::find($id);
        $partprog->update([
            'promotiontext' => $request->promotiontext,
            'link' => $request->link,
            'pict' => $image
        ]);

        return redirect('/admlab/admbanner');
    }
    // BANNER END
}
