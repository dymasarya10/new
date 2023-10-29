<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\VisiMisi;
use App\Models\Aplikasi;
use App\Models\Contact;
use App\Models\LayananKarir;
class AdminSecPageController extends Controller
{
    // VISIMISI START
    public function visimisi()
    {
        return view('admin.admvisimisi', [
            'heading' => 'Visi dan Misi',
            'collection' => VisiMisi::all()
        ]);
    }

    public function editvisimisi($id, Request $request)
    {
        if($request->file('visimisiImage') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('visimisiImage')->store('visimisisec');
        }
        $homepict = VisiMisi::find($id);
        $homepict->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'pict' => $image
        ]);
        return redirect('/admvisimisi');
    }
    // VISIMISI END

    // APP START
    public function application()
    {
        return view('admin.admapp', [
            'heading' => 'Aplikasi',
            'collection' => Aplikasi::all()
        ]);
    }

    public function createapp(Request $request)
    {
        $app = new Aplikasi;
        $app->nama_aplikasi = $request->nama_aplikasi;
        $app->pict = $request->file('pict')->store('appsec');
        $app->shortdesc = $request->shortdesc;
        $app->link = $request->link;

        $app->save();

        return redirect('/admapp');
    }

    public function updateapp($id, Request $request)
    {
        if($request->file('pict') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('pict')->store('appsec');
        }
        $app = Aplikasi::find($id);
        $app->update([
            'nama_aplikasi' => $request->nama_aplikasi,
            'shortdesc' => $request->shortdesc,
            'link' => $request->link,
            'pict' => $image
        ]);
        return redirect('/admapp');
    }

    public function deleteapp($id)
    {
        $app = Aplikasi::find($id);
        Storage::delete($app->pict);
        $app->delete();

        return redirect('/admapp');
    }
    // APP END

    // VACANCY START
    public function vacancies()
    {
        return view('admin.admvacancies', [
            'heading' => 'Lowongan Pekerjaan',
            'collection' => LayananKarir::all()
        ]);
    }

    public function createvacancies(Request $request)
    {
        $vac = new LayananKarir;
        $vac->title = $request->title;
        $vac->pict = $request->file('pict')->store('vacanciesImg');
        $vac->link = $request->link;

        $vac->save();

        return redirect('/admvacancies');
    }

    public function updatevacancies($id, Request $request)
    {
        if($request->file('pict') === null){
            $image = $request->oldImage;
        } else {
            Storage::delete($request->oldImage);
            $image = $request->file('pict')->store('vacanciesImg');
        }
        $vac = LayananKarir::find($id);
        $vac->update([
            'title' => $request->title,
            'link' => $request->link,
            'pict' => $image
        ]);
        return redirect('/admvacancies');
    }

    public function deletevacancies($id)
    {
        $vac = LayananKarir::find($id);
        Storage::delete($vac->pict);
        $vac->delete();

        return redirect('/admvacancies');
    }
    // VACANCY END

    // KONTAK START
    public function contact()
    {
        return view('admin.admcontact', [
            'heading' => 'Kontak',
            'collection' => Contact::all()
        ]);
    }

    public function updatecontact($id, Request $request)
    {
        $vac = Contact::find($id);
        $vac->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'maplink' => $request->maplink,
            'fblink' => $request->fblink,
            'instalink' => $request->instalink,
            'footerdesc' => $request->footerdesc,
        ]);
        return redirect('/admcontact');
    }
    // KONTAK END

}
