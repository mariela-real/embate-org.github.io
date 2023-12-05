<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Work;
use Image;
class WorkController extends Controller
{
    public function showWork(){
        $work = Work::all();
        return view('work.work', compact('work'));
    }
    public function index()
    {
        $work = Work::all();
        return view('admin.about_us.work.index', compact('work'));
    }
    public function create()
    {
        return view('admin.about_us.work.create');
    }

    public function store(Request $request)
    {
        $work = new Work($request->all());

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $newName = 'work_' . time() . '.' . $video->getClientOriginalExtension();

            // Mueve el archivo de video al directorio de almacenamiento
            $video->move(public_path('/videos/work/'), $newName);

            $work->video = $newName;
        }

        $work->save();
        return redirect('/how_to_work');
    }

    public function update(Request $request, $id)
    {
        $work = Work::findOrFail($id);
        $work->fill($request->all());

        $previousVideo = $work->video;

        if ($request->hasFile('video')) {
            $previousPath = public_path('/videos/work/' . $previousVideo);

            if (file_exists($previousPath)) {
                unlink(realpath($previousPath));
            }

            $video = $request->file('video');
            $newName = 'work_' . time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('/videos/work/'), $newName);

            $work->video = $newName;
        }

        $work->save();
        return redirect('/how_to_work');
    }
    public function edit($id)
    {
        $work = Work::findOrfail($id);
	    return view('admin.about_us.work.edit', compact('work'));
    }


    public function destroy($id)
    {
        $work = work::findOrFail($id);
        $delete = public_path('/videos/work/'.$work->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $work->delete();
        return redirect('/how_to_work');
    }
}
