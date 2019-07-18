<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class home extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories=Category::all();
        $cities=City::orderBy('name', 'asc')->get();
        $data=Data::all();
        $lastlost=DB::table('data')->where('type', 'lost')->latest()->take(10)->get();
        $lastfound=DB::table('data')->where('type', 'found')->latest()->take(10)->get();

        $countlost =DB::table('data')->where('type', 'lost')->count();
        $countfound=DB::table('data')->where('type', 'found')->count();
        return view('home',compact('categories','cities','data','countlost','countfound','lastlost','lastfound'));
    }

}
