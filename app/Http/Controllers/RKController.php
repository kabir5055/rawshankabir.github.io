<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Message;
use App\Models\Mywork;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class RKController extends Controller
{
    public function index()
    {
        return view('frontEnd.portfolio.portfolio',[
            'about' => About::where('id',1)->orwhere('status',1)->first(),
            'services' => Services::all(),
            'works' => Mywork::all(),
            'testimonial' => Testimonial::all(),
            'teams' => Team::all(),
        ]);
    }
    public function sendMessage(Request $request)
    {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect(route('portfolio'));
    }
    public function deleteMessage(Request $request)
    {
        $message = Message::find($request->message_id);
        $message->delete();
    }
}
