<?php

namespace App\Http\Controllers;
use DB;
use App\adminlog;
use Illuminate\Http\Request;

class AdminlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        return view('admin.admin_login');
        


          

      //  return view('admin.admin_login')->with('users', $users);
    
    }

    public function login(Request $request){
        $username=$request->uname;
        $password=$request->psw;
        

        $admin = DB::table('adminlogs')
        ->where('name', $username)
        ->where('password',$password)
        ->count();
        
        if($admin>0){
            return view('admin.adhome');
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adminlog  $adminlog
     * @return \Illuminate\Http\Response
     */
    public function show(adminlog $adminlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adminlog  $adminlog
     * @return \Illuminate\Http\Response
     */
    public function edit(adminlog $adminlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adminlog  $adminlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminlog $adminlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adminlog  $adminlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminlog $adminlog)
    {
        //
    }
}
