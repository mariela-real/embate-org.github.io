<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Process;
class ProcessIncubationController extends Controller
{

    public function index()
    {
        $process = Process::all();
        return view('admin.process.motivation.index', compact('process'));
    }
    public function create()
    {
        return view('admin.process.motivation.create');
    }

    public function store(Request $request)
    {
        $process = new Process($request->all());
        if($request->hasFile('urlphoto'))
        {
            $image = $request->file('urlphoto');
            $newName ='process_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/process/'.$newName));

            $process->urlphoto = $newName;
        }
        $process->save();
        return redirect('/process_motivation');
    }

    public function update(Request $request, $id)
    {
        $process = Process::findOrfail($id);
        $process->fill($request->all());
        $previousPhoto =  $process->urlphoto;
        if($request->hasFile('urlphoto'))
        {
        $previousRoute = public_path('/img/process/'.$previousPhoto);
        if(file_exists($previousRoute)){unlink(realpath($previousRoute));}
        $image = $request->file('urlphoto');
        $newName ='process_'.time().'.'.$image->guessExtension();
        Image::make($image->getRealPath())
        ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
        ->save(public_path('/img/process/'.$newName));

        $team->urlphoto = $newName;
	    }
	$team->save();
	return redirect('/process_motivation');

    }
    public function edit($id)
    {
        $team = Process::findOrfail($id);
	    return view('admin.process.motivation.edit', compact('team'));
    }

    public function destroy($id)
    {
        $process = process::findOrFail($id);
        $delete = public_path('/img/process/'.$process->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $process->delete();
        return redirect('/process_motivation');
    }
}

