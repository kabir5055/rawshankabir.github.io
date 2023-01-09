<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        return view('admin.testimonial.testimonial',[
            'testimonials' => Testimonial::all(),
        ]);
    }
    public function saveTestimonial(Request $request)
    {
        Testimonial::saveTestimonial($request);
        return back();
    }
    public function editTestimonial($id)
    {
        $testimonial =Testimonial::find($id);
        return view('admin.testimonial.edit-testimonial',[
            'testimonial' => $testimonial,
        ]);
    }
    public function updateTestimonial(Request $request)
    {
        Testimonial::updateTestimonial($request);
        return redirect(route('testimonial'));
    }
    public function statusTestimonial($id)
    {
        Testimonial::statusTestimonial($id);
        return redirect(route('testimonial'));
    }
    public function deleteTestimonial(Request $request)
    {
        Testimonial::deleteTestimonial($request);
        return redirect(route('testimonial'));
    }
}
