<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function loadMenu(Request $request)
    {
        $user = Auth::user();
        return view('admin',compact('user'));
    }
}
