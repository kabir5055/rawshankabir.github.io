<?php

namespace App\Http\Controllers;

use App\Models\Mywork;
use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    public function myWork()
    {
        return view('admin.my-work.my-work',[
            'works' => Mywork::all(),
        ]);
    }
    public function saveMyWork(Request $request)
    {
        Mywork::saveMyWork($request);
        return redirect(route('my_work'));
    }
    public function status($id)
    {
        Mywork::status($id);
        return redirect(route('my_work'));
    }
}
