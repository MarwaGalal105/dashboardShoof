<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Option;
use App\User;
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
        $countUsers =DB::table('users')->count();
        $countCategories =DB::table('categories')->count();
      
       
        $categories=Category::latest()->take(10)->get();
        $users=User::latest()->take(10)->get();
        return view('dashboard/home',compact('categories','users','countUsers','countCategories'));
    }
}
