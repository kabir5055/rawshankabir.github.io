<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public static $team,$image,$imageName,$directory,$imageUrl;
    public static function saveTeam($request)
    {
        self::$team = new Team();

        self::$team->name = $request->name;
        self::$team->designation = $request->designation;
        self::$team->facebook = $request->facebook;
        self::$team->linkedIn = $request->linkedIn;
        self::$team->github = $request->github;
        self::$team->twitter = $request->twitter;
        self::$team->category = $request->category;
        self::$team->team_image = self::saveTeamImage($request);
        self::$team->save();
    }
    private static function saveTeamImage($request)
    {
        self::$image = $request->file('team_image');
        if (self::$image)
        {
            if (file_exists(self::$team->image))
            {
                unlink(self::$team->image);
            }
            self::$imageName = rand().'.'.self::$image->getClientoriginalExtension();
            self::$directory = 'adminAsset/testimonial_image/';
            self::$imageUrl = self::$directory.self::$imageName;
            self::$image->move(self::$directory,self::$imageName);
        }
        else
        {
            self::$imageUrl = self::$team->image;
        }
        return self::$imageUrl;
    }
    public static function updateTeam($request)
    {
        self::$team = Team::find($request->team_id);

        self::$team->name = $request->name;
        self::$team->designation = $request->designation;
        self::$team->facebook = $request->facebook;
        self::$team->linkedIn = $request->linkedIn;
        self::$team->github = $request->github;
        self::$team->twitter = $request->twitter;
        self::$team->category = $request->category;
        self::$team->team_image = self::saveTeamImage($request);
        self::$team->save();
    }
    public static function status($id)
    {
        self::$team = Team::find($id);
        if (self::$team->status == 1)
        {
            self::$team->status = 2;
        }
        else
        {
            self::$team->status = 1;
        }
        self::$team->save();
    }
    public static function deleteTeam($request)
    {
        self::$team = Services::find($request->team_id);
        if (self::$image)
        {
            if (file_exists(self::$team->image)) {
                unlink(self::$team->image);
            }
        }
        self::$team->delete();
    }
}
