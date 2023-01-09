<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        return view('admin.team.team');
    }
    public function saveTeam(Request $request)
    {
        Team::saveTeam($request);
        return redirect(route('manage.team'));
    }
    public function manageTeam()
    {
        return view('admin.team.manage-team',[
            'teams' => Team::all(),
        ]);
    }
    public function editTeam($id)
    {
        $team = Team::find($id);
        return view('admin.team.edit-team',[
            'team' => $team,
        ]);
    }
    public function updateTeam(Request $request)
    {
        Team::updateTeam($request);
        return redirect(route('manage.team'));
    }
    public function statusTeam($id)
    {
        Team::status($id);
        return redirect(route('manage.team'));
    }
    public function deleteTeam(Request $request)
    {
        Team::deleteTeam($request);
        return redirect(route('manage.team'));
    }
}
