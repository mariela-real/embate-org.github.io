<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarouselHome;
use App\Models\CarouselAboutUs;
use App\Models\CarouselOpinion;
use App\Models\Team;
class CarouselController extends Controller
{

    public function mainCarousel(){
        $carousel = CarouselHome::orderBy('order','asc')->get();
        return view('home.home', compact('carousel'));
    }
    public function aboutUsCarousel(){
        $carousel = CarouselAboutUs::orderBy('order','asc')->get();
        return view('about.about', compact('carousel'));
    }
   /* public function opinionsCarousel(){
        $carousel = CarouselOpinion::orderBy('order','asc')->get();
        return view('motivation.motivation', compact('carousel'));
    }*/
}
