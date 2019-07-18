<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;
use App\Data;
use App\Category;
use App\City;
use App\User;
use DB;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (auth()->user()->permission == 'admin') {
            return '/dashboard';
        }
       else if(auth()->user()->permission =='user')
       {
           return '/home';
       }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
        return view('auth.login',compact('categories','cities','data','countlost','countfound','lastlost','lastfound'));
    }
}
