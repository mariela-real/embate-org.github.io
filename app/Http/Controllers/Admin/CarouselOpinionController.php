<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;
use App\Http\Requests\CarouselOpinionsRequest;
use App\Models\CarouselOpinion;
class CarouselOpinionController extends Controller
{
    public function index()
    {
        $carousels = CarouselOpinion::all();
        return view('admin.carousel.carousel_opinions.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.carousel_opinions.create');
    }

    public function store(CarouselOpinionsRequest $request)
    {
        $carousel = new CarouselOpinion($request->all());
        $carousel->save();

        return redirect('/opinions_carousel');
    }

    public function update(CarouselOpinionsRequest $request, $id)
    {
        $carousel = CarouselOpinion::findOrFail($id);
        $carousel->fill($request->all());
        $carousel->save();

        return redirect('/opinions_carousel');
    }
    public function edit($id)
    {
        $carousel = CarouselOpinion::findOrfail($id);
	    return view('admin.carousel.carousel_opinions.edit', compact('carousel'));
    }

    public function destroy($id)
    {
        $carousel = CarouselOpinion::findOrFail($id);
        $carousel->delete();
        return redirect('/opinions_carousel');
    }

}
