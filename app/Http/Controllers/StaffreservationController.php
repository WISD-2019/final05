<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use App\Table;
use App\Detail;

use http\Encoding\Stream\Debrotli;
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
    public function show(Reservation $reservation)
    {
        //
        $users = User::all();
        $tables=Table::all();
        $details=Detail::all();
        $data=['reservations'=>$reservation,'users'=>$users,'tables'=>$tables,'details'=>$details];
        return view('staff.reservation.detail',$data);

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
