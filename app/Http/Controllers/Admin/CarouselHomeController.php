<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\CarouselHome;
class CarouselHomeController extends Controller
{
    public function index()
    {
        $carousels = CarouselHome::all();
        return view('admin.carousel.carousel_home.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.carousel_home.create');
    }

    public function store(Request $request)
    {
        $carousel =  new CarouselHome($request->all());
        if($request->hasFile('urlphoto'))
        {
            $image = $request->file('urlphoto');
            $newName ='carousel_'.time().'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
            ->save(public_path('/img/carousel/'.$newName));

            $carousel->urlphoto = $newName;
        }
        $carousel->save();
        return redirect('/carousel');
    }

    public function update(Request $request, $id)
    {
        $carousel = CarouselHome::findOrfail($id);
        $carousel->fill($request->all());
        $previousPhoto =  $carousel->urlphoto;
        if($request->hasFile('urlphoto'))
        {
        $previousRoute = public_path('/img/carousel/'.$previousPhoto);
        if(file_exists($previousRoute)){unlink(realpath($previousRoute));}
        $image = $request->file('urlphoto');
        $newName ='carousel_'.time().'.'.$image->guessExtension();
        Image::make($image->getRealPath())
        ->fit(1200, 450, function($constraint){ $constraint->upsize(); })
        ->save(public_path('/img/carousel/'.$newName));

        $carousel->urlphoto = $newName;
	    }
	$carousel->save();
	return redirect('/carousel');

    }
    public function edit($id)
    {
        $carousel = CarouselHome::findOrfail($id);
	    return view('admin.carousel.carousel_home.edit', compact('carousel'));
    }


    public function destroy($id)
    {
        $carousel = CarouselHome::findOrFail($id);
        $delete = public_path('/img/carousel/'.$carousel->urlphoto);
        if(file_exists($delete)){unlink(realpath($delete));}
            $carousel->delete();
        return redirect('/carousel');
    }

}
