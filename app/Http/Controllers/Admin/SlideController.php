<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Image;
use App\Models\Carousel;
use App\Models\Slide;
class SlideController extends Controller
{
    public function index()
    {
        $carousels = Slide::with('carousel')->get();
        return view('admin.carousel.carousel_home.index', compact('carousels'));
    }
    public function index_aboutUs()
    {
        $carousels = Slide::where('carousel_id', 2)->get();
        dd($carousels);
        return view('admin.carousel.carousel_aboutUs.index_aboutUs', compact('carousels'));
    }


    public function create()
    {
        $carousels = Slide::all();
        return view('admin.carousel.carousel_home.create', compact('carousels'));
    }
    public function create_aboutUs()
    {
        $carousels = Slide::where('carousel_id', 2)->get();
        dd($carousels);
        return view('admin.carousel.carousel_aboutUs.create', compact('carousels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'order' => 'integer',
            'urlphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $carousel = Carousel::find(1);
        if ($carousel && $carousel->name === 'home') {
            $slide = new Slide($request->all());
            if ($request->hasFile('urlphoto')) {
                $image = $request->file('urlphoto');
                $newName = 'carousel_' . time() . '.' . $image->guessExtension();
                Image::make($image->getRealPath())
                    ->fit(1200, 450, function ($constraint) {
                        $constraint->upsize();
                    })
                    ->save(public_path('/img/carousel/' . $newName));

                $slide->urlphoto = $newName;
            }

            $carousel->slides()->save($slide);

            return redirect('/carousel');
        }
        $carousel = Carousel::find(2);
        if($carousel && $carousel->name === 'aboutUs'){
            $slide = new Slide($request->all());
            if ($request->hasFile('urlphoto')) {
                $image = $request->file('urlphoto');
                $newName = 'carousel_' . time() . '.' . $image->guessExtension();
                Image::make($image->getRealPath())
                    ->fit(1200, 450, function ($constraint) {
                        $constraint->upsize();
                    })
                    ->save(public_path('/img/carousel/' . $newName));

                $slide->urlphoto = $newName;
            }

            $carousel->slides()->save($slide);

            return redirect('/about');

        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'order' => 'integer',
            'urlphoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $carousel = Carousel::find(1);
        if ($carousel && $carousel->name === 'home') {
            $slide = Slide::findOrFail($id);
            $slide->fill($request->all());
            $previousPhoto =  $slide->urlphoto;
            if($request->hasFile('urlphoto'))
            {
            $previousRoute = public_path('/img/carousel/'.$previousPhoto);
            if(file_exists($previousRoute)){unlink(realpath($previousRoute));}
            $image = $request->file('urlphoto');
            $newName ='carousel_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/carousel/'.$newName));

            $slide->urlphoto = $newName;
            }
        $slide->save();
        return redirect('/carousel');
        }
    }
    public function edit($id)
    {
        $carousel = Slide::findOrFail($id);
        return view('admin.carousel.carousel_home.edit', compact('carousel'));
    }
    public function edit_aboutUs($id)
    {
        $carousel = Slide::findOrFail($id);
        return view('admin.carousel.carousel_aboutUs.edit_aboutUs', compact('carousel'));
    }

    public function destroy($id)
    {
        $carousel = slide::findOrFail($id);
        $delete = public_path('/img/carousel/'.$carousel->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $carousel->delete();
        return redirect('/carousel');
    }

}
