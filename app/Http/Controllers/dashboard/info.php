<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data;
use App\Category;
use App\City;
use File;
class info extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info= Data::all();
        return view('dashboard.info.index',['info'=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $cities=City::all();
        return view('dashboard.info.create',compact('categories','cities'));
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

        return redirect('dashboard/info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info =Data::find($id);
        $categories =Category::all();
        $cities=City::all();
        return view('dashboard.info.edit',compact('info','categories','cities'));
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
        $info =Data::find($id);
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

        return redirect('dashboard/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Data::findOrFail($id);

       $destinationPath = 'public/uploads/'.$info->image;

       if(File::exists($destinationPath)){
         File::delete($destinationPath);
        }

        $info = Data::destroy($id);
       
        return back();
    }
}
