<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public static $services;
    public static function saveServices($request)
    {
        self::$services = new Services();
        self::$services->services_name = $request->services_name;
        self::$services->services_content = $request->services_content;
        self::$services->save();
    }
    public static function updateServices($request)
    {
        self::$services = Services::find($request->service_id);
        self::$services->services_name = $request->services_name;
        self::$services->services_content = $request->services_content;
        self::$services->save();

    }
    public static function status($id)
    {
        self::$services = Services::find($id);
        if (self::$services->status == 1)
        {
            self::$services->status = 2;
        }
        else
        {
            self::$services->status = 1;
        }
        self::$services->save();
    }
    public static function deleteServices($request)
    {
        self::$services = Services::find($request->service_id);
        self::$services->delete();
    }
}
