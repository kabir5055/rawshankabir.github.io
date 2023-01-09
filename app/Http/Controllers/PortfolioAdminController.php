<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioAdminController extends Controller
{
    public function index()
    {
        return view('admin.home.home',[
            'messages' => Message::all(),
        ]);
    }
}
