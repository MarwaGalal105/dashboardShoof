<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Category;
use App\City;
use DB;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    public function create()
    {
        $categories=Category::all();
        $cities=City::orderBy('name', 'asc')->get();
        $data =Data::all();
        return view('home',compact('categories','cities','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Data();
        $info->name = $request->name;
        $info->address = $request->address;
        $info->city = $request->city;
        $info->age = $request->age;
        $info->date = $request->date;
        $info->gender = $request->gender;
        $info->telephone = $request->telephone;
        $info->notes = $request->notes;
        $info->image = $request->image;
        $info->status = $request->status;
        $info->type = $request->type;
        $info->save();

        $id= $info->id;
        if($image = $request->file('image')){
            $destinationPath = 'public/uploads/'; 
            $extension = $image->getClientOriginalExtension(); 
            $fileName = $id.'_image'.'.'.$extension; 
            
            $image->move($destinationPath, $fileName); 
            
            Data::where('id',$id)->update(['image' => $fileName]); 
        }

        return redirect('/home');
    }
}
