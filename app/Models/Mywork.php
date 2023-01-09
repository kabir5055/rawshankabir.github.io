<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mywork extends Model
{
    use HasFactory;
    public static $mywork,$image,$imageName,$directory,$imageUrl;
    public static function saveMyWork($request)
    {
        self::$mywork = new Mywork();
        self::$mywork->mywork_image = self::saveAboutImage($request);
        self::$mywork->save();
    }
    private static function saveAboutImage($request)
    {
        self::$image = $request->file('mywork_image');
        if (self::$image)
        {
            self::$imageName = rand().'.'.self::$image->getClientoriginalExtension();
            self::$directory = 'adminAsset/mywork_image/';
            self::$imageUrl = self::$directory.self::$imageName;
            self::$image->move(self::$directory,self::$imageName);
        }
        else
        {
            self::$imageUrl = self::$mywork->image;
        }
        return self::$imageUrl;
    }
    public static function status($id)
    {
        self::$mywork = Mywork::find($id);
        if (self::$mywork->status == 0)
        {
            self::$mywork->status = 1;
        }
        else
        {
            self::$mywork->status = 0;
        }
        self::$mywork->save();
    }
}
