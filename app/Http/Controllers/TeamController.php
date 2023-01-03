<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{

    public function showTeam(){
        $teams = Team::select('*')->withTrashed()->paginate(5);
        return view('admin.teamTable')->with('teams', $teams);
    }

    public function storeTeam(TeamRequest $request){
		$team = new Team;

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('team_images'), $filename);
		$team->img = 'team_images/' . $filename;

    	$team->name = $request->name;
    	$team->name_ar = $request->name_ar;
    	$team->job = $request->job;
		$team->job_ar = $request->job_ar;
    	// $team->img = $fileName;
	    $status = $team->save();
    	return redirect()->back()->with('status', $status);
    }

    public function createTeam(){
        return view('admin.teamForm');
    }

    public function editTeam($id){
        $team = Team::select('*')->where('id', $id)->first();
    	return view('admin.editTeamForm')->with('team', $team);
    }

    public function updateTeam(TeamRequest $request){
    	$team = Team::find($request->id);

		unlink(public_path( $team->img));

		$filename = time().'_'.rand(1,10000).'.'.$request->img->extension();
		$request->img->move(public_path('team_images'), $filename);
		$team->img = 'team_images/' . $filename;

		$team->name = $request->name;
		$team->name_ar = $request->name_ar;
    	$team->job = $request->job;
		$team->job_ar = $request->job_ar;
    	$status = $team->save();
		return redirect()->back()->with('status', $status);
    }

    public function deleteTeam($id){
    	Team::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreTeam($id){
    	Team::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
