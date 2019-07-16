<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Data;
use App\Category;
use App\City;
use DB;
use Input;
class findchild extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info= Data::all();
        $item=DB::table('data')->where('type', 'found')->latest()->take(6)->get();
        return view('front.found.index',compact('info','item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::orderBy('name', 'asc')->get();
        return view('front.found.create',compact('cities'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Data::findOrFail($id);
        
        $item=DB::table('data')->where('type', 'found')->latest()->take(6)->get();
        return view('front.found.show' , compact('info','item'));
    }

    public function search(){
        
        $name = Input::get('search');
        $telephone = Input::get('search');
        $info = Data::where('name','Like','%'.$name.'%')->orWhere('telephone','Like','%'.$telephone.'%')->get();
        // $searchtel = Data::where('telephone','Like','%'.$telephone.'%')->get();
        return view('front.found.index',compact('info'));
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
