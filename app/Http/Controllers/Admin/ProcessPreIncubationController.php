<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Process;
use App\Http\Requests\ProcessRequest;
class ProcessPreIncubationController extends Controller
{
    public function showMotivation(){
        $process = Process::where('id', 3)->first();
        return view('pre_incubation.pre_incubation', compact('process'));
    }

    public function index()
    {
        $process = Process::where('id', 3)->first();
        return view('admin.process.pre_incubation.index', compact('process'));
    }
    public function create()
    {
        return view('admin.process.pre_incubation.create');
    }

    public function store(ProcessRequest $request)
    {
        $process = new Process($request->all());
        if($request->hasFile('urlphoto'))
        {
            $image = $request->file('urlphoto');
            $newName ='process_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 800, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/process/'.$newName));

            $process->urlphoto = $newName;
        }
        $process->save();
        return redirect('/process_pre_incubation');
    }

    public function update(ProcessRequest $request, $id)
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
        ->fit(1200, 800, function($constraint){ $constraint->upsize(); })
        ->save(public_path('/img/process/'.$newName));

        $process->urlphoto = $newName;
	    }
	$process->save();
	return redirect('/process_pre_incubation');

    }
    public function edit($id)
    {
        $process = Process::findOrfail($id);
	    return view('admin.process.pre_incubation.edit', compact('process'));
    }

    public function destroy($id)
    {
        $process = process::findOrFail($id);
        $delete = public_path('/img/process/'.$process->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $process->delete();
        return redirect('/process_pre_incubation');
    }
}
