<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;
use Auth;


class CarController extends Controller
{
    
    public function index()
    {
        return view('admin.addcars');

    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {

        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
    
        }
        
        $carname=$request->input('carname');
        $brand=$request->input('brand');
        $model=$request->input('model');
        $color=$request->input('color');
        $year=$request->input('year');

        $car=new car();
        $car->carname=$carname;
        $car->brand=$brand;
        $car->model=$model;
        $car->color=$color;
        $car->year=$year;
        $car->image=$name;
        $car->save();

        print "Successfully inserted";
    }

    
    public function show(car $car)
    {    $cars=car::all();
        return view('user.viewcars',['cars'=>$cars]);
    }
     
    public function view($id){
        $user_id = Auth::user()->id;
        $cars=car::find($id);
        return view('user.viewbook',['cars'=>$cars,'user_id' => $user_id]);
    }
    

    
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car)
    {
        //
    }
}
