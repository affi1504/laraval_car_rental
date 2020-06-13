<?php

namespace App\Http\Controllers;

use App\booking;
use DateTime;
use Illuminate\Http\Request;
use DB;
use Auth;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $userid=$request->input('userid');
        $vehicleid=$request->input('vehicleid');
        $from=$request->input('from');
        $to=$request->input('to');
        $days=$request->input('days');
        $totalamt=$request->input('totalamt');

        $fdate = $request->from;
        $tdate = $request->to;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $perday=500;
        $totalamt=$days*$perday;

        

        $booking=new booking();
        $booking->userid=$userid;
        $booking->vehicleid=$vehicleid;
        $booking->from=$from;
        $booking->to=$to;
        $booking->days=$days;
        $booking->totalamt=$totalamt;
        $booking->save();
        $bid=$booking->id;

        return redirect('/view_bill/'.$bid);
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   

        $bookings = DB::table('bookings')
            ->join('users', 'bookings.userid', '=', 'users.id')
            ->join('cars', 'bookings.vehicleid', '=', 'cars.id')
            ->select('users.*', 'bookings.*', 'cars.*')
            ->get();
            
         return view('user.userbill',['bookings'=>$bookings]);

    }

    public function showbill($id)
    {  
         $userid = Auth::user()->id;
    //    $bookings=booking::find($id);
       $bookings = DB::table('bookings')
            ->join('users', 'bookings.userid', '=', 'users.id')
            ->join('cars', 'bookings.vehicleid', '=', 'cars.id')
            ->where('bookings.id' , '=' ,$id)
            ->select('users.*', 'bookings.*', 'cars.*')
            ->get();
       return view('user.userbookings',['bookings'=>$bookings]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
