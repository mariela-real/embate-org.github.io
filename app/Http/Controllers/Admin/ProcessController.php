<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Process;
class ProcessController extends Controller
{

    public function showPreIncubation(){
        $pre_incubation = Process::all();
        return view('pre_incubation.pre_incubation', compact('pre_incubation'));
    }
    public function showIncubation(){
        $incubation = Process::all();
        return view('incubation.incubation', compact('incubation'));
    }
    public function showPostIncubation(){
        $post_incubation = Process::all();
        return view('post_incubation.post_incubation', compact('post_incubation'));
    }

}
