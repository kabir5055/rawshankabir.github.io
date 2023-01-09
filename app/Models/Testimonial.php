<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public static $testimonial,$image,$imageName,$directory,$imageUrl;
    public static function saveTestimonial($request)
    {
        self::$testimonial = new Testimonial();
        self::$testimonial->testimonial_content = $request->testimonial_content;
        self::$testimonial->testimonial_image = self::saveTestimonialImage($request);
        self::$testimonial->save();
    }
    private static function saveTestimonialImage($request)
    {
        self::$image = $request->file('testimonial_image');
//        self::$testimonial = Testimonial::find($request->testimonial_id);
        if (self::$image)
        {
            if (self::$testimonial)
            {
                if (file_exists(self::$testimonial->image))
                {
                    unlink(self::$testimonial->image);
                }
            }
            self::$imageName = rand().'.'.self::$image->getClientoriginalExtension();
            self::$directory = 'adminAsset/testimonial_image/';
            self::$imageUrl = self::$directory.self::$imageName;
            self::$image->move(self::$directory,self::$imageName);
        }
        else
        {
            self::$imageUrl = self::$testimonial->image;
        }
        return self::$imageUrl;
    }
    public static function updateTestimonial($request)
    {
        self::$testimonial = Testimonial::find($request->testimonial_id);
        self::$testimonial->testimonial_content = $request->testimonial_content;
        self::$testimonial->testimonial_image = self::saveTestimonialImage($request);
        self::$testimonial->save();

    }
    public static function statusTestimonial($id)
    {
        self::$testimonial = Testimonial::find($id);
        if (self::$testimonial->status == 0)
        {
            self::$testimonial->status = 1;
        }
        else
        {
            self::$testimonial->status = 0;
        }
        self::$testimonial->save();
    }
    public static function deleteTestimonial($request)
    {
        self::$testimonial = Testimonial::find($request->testimonial_id);
        if (self::$testimonial->image)
        {
            if (file_exists(self::$testimonial->image))
            {
                unlink(self::$testimonial->image);
            }
        }
        self::$testimonial->delete();
    }
}
