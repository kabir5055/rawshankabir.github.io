<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public static $about,$image,$imageName,$directory,$imageUrl;

    public static function saveAbout($request)
    {
        self::$about = new About();
        self::$about->about_content = $request->about_content;
        self::$about->about_image = self::saveAboutImage($request);
        self::$about->save();

    }
    private static function saveAboutImage($request)
    {
        self::$image = $request->file('about_image');
        if (self::$image)
        {
            if (self::$about)
            {
                if (file_exists(self::$about->image))
                {
                    unlink(self::$about->image);
                }
            }
            self::$imageName = rand().'.'.self::$image->getClientoriginalExtension();
            self::$directory = 'adminAsset/about_image/';
            self::$imageUrl = self::$directory.self::$imageName;
            self::$image->move(self::$directory,self::$imageName);
        }
        else
        {
            self::$imageUrl = self::$about->about_image;
        }
        return self::$imageUrl;
    }
    public static function updateAbout($request)
    {
        self::$about = About::find($request->about_id);
        self::$about->about_content = $request->about_content;
        self::$about->about_image = self::saveAboutImage($request);
        self::$about->save();
    }
    public static function statusAbout($id)
    {
        self::$about = About::find($id);
        if (self::$about->status == 0)
        {
            self::$about->status = 1;
        }
        else
        {
            self::$about->status = 0;
        }
        self::$about->save();
    }
    public static function deleteAbout($request)
    {
        self::$about = About::find($request->about_id);
        if (self::$about->image)
        {
            if (file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
        }
        self::$about->delete();
    }
}
