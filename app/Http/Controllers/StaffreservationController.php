<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Users;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PostRequest;

class StaffreservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations=Reservation::orderBy('id','ASC')->get();
        $data=['reservations'=>$reservations];
        return View('staff.reservation.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.reservation.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reservation::create($request->all());
        return redirect()->route('staff.reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reservations = Reservation::find($id);
        return view('staff.reservation.detail', compact('reservations'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservations=Reservation::find($id);
        $data=['reservations'=>$reservations];
        return view('staff.reservation.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reservations=Reservation::find($id);
        $reservations->update($request->all());
        return redirect()->route('staff.reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);
        return redirect()->route('staff.reservation.index');
    }
}
