<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        return view('admin.services.services',[
            'services' => Services::all(),
        ]);
    }
    public function saveServices(Request $request)
    {
        Services::saveServices($request);
        return back();
    }
    public function editServices($id)
    {
        $services =Services::find($id);
        return view('admin.services.edit-services',[
            'service' => $services,
        ]);
    }
    public function updateServices(Request $request)
    {
        Services::updateServices($request);
        return redirect(route('services'));
    }
    public function status($id)
    {
        Services::status($id);
        return redirect(route('services'));
    }
    public function deleteServices(Request $request)
    {
        Services::deleteServices($request);
        return redirect(route('services'));
    }
}
