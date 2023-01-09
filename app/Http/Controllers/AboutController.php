<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('admin.about.about',[
            'about' => About::all(),
        ]);
    }
    public function saveAbout(Request $request)
    {
        About::saveAbout($request);
        return back();
    }
    public function editAbout($id)
    {
        $about =About::find($id);
        return view('admin.about.edit-about',[
            'about' => $about,
        ]);
    }
    public function updateAbout(Request $request)
    {
        About::updateAbout($request);
        return redirect(route('about'));
    }
    public function statusAbout($id)
    {
        About::statusAbout($id);
        return redirect(route('about'));
    }
    public function deleteAbout(Request $request)
    {
        About::deleteAbout($request);
        return redirect(route('about'));
    }
//    public function viewAbout()
//    {
//        $about = About::all();
//        return view('admin.about.about',[
//            'about' => $about,
//        ]);
//    }
}
