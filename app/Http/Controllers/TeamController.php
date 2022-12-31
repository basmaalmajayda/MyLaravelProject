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
		// foreach($teams as $team){
		// 	$img_link = Storage::url($team->img);
		// 	$team->img = $img_link;
		// }
        return view('admin.teamTable')->with('teams', $teams);
    }

    public function storeTeam(TeamRequest $request){
		
        // $img = $request->file('img');
    	// $path = 'public/team_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

		$team = new Team;
		// $path = $request->file('img')->store('public/team_images');
    	// $fileName = basename($path);

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('team_images'), $filename);
		$team->img = '/team_images/' . $filename;

    	$team->name = $request->name;
    	$team->name = $request->name;
    	$team->job = $request->job;
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
        // $img = $request->file('img');
    	// $path = 'public/team_images/';
    	// $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
    	// Storage::disk('local')->put($path.$name, file_get_contents($img));

    	$team = Team::find($request->id);

		// $path = $request->file('img')->store('public/team_images');
    	// $fileName = basename($path);

		$filename = time().'.'.$request->img->extension();
		$request->img->move(public_path('team_images'), $filename);
		$team->img = '/team_images/' . $filename;

		$team->name = $request->name;
		$team->job = $request->job;
    	//$team->img = $fileName;
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
