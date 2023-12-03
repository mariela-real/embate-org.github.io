<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Image;
use App\Models\Team;
class TeamController extends Controller
{
    public function showTeam(){
        $team = Team::all();
        return view('team.team', compact('team'));
    }
    public function index()
    {
        $team = Team::all();
        return view('admin.about_us.team.index', compact('team'));
    }
    public function create()
    {
        return view('admin.about_us.team.create');
    }

    public function store(Request $request)
    {
        $team = new team($request->all());
        if($request->hasFile('urlphoto'))
        {
            $image = $request->file('urlphoto');
            $newName ='team_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/team/'.$newName));

            $team->urlphoto = $newName;
        }
        $team->save();
        return redirect('/team_profile');
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrfail($id);
        $team->fill($request->all());
        $previousPhoto =  $team->urlphoto;
        if($request->hasFile('urlphoto'))
        {
        $previousRoute = public_path('/img/team/'.$previousPhoto);
        if(file_exists($previousRoute)){unlink(realpath($previousRoute));}
        $image = $request->file('urlphoto');
        $newName ='team_'.time().'.'.$image->guessExtension();
        Image::make($image->getRealPath())
        ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
        ->save(public_path('/img/team/'.$newName));

        $team->urlphoto = $newName;
	    }
	$team->save();
	return redirect('/team_profile');

    }
    public function edit($id)
    {
        $team = Team::findOrfail($id);
	    return view('admin.about_us.team.edit', compact('team'));
    }

    public function destroy($id)
    {
        $team = team::findOrFail($id);
        $delete = public_path('/img/team/'.$team->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $team->delete();
        return redirect('/team_profile');
    }
}
