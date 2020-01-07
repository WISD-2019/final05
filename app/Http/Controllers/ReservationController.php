<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
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

    //連結我的訂位頁面
    public function myreservation(Request $request)
    {
        //顯示已有的訂位
        //由 DB 擷取使用者所有訂位
        $reservations = Reservation::where('user_id', $request->user()->id)->get();
        $data=['reservations'=>$reservations];
        return view('member.myreservation.index', $data);
    }

    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    //增加 middleware 的方法，用以呼叫名稱為 auth 的中介層程式，以檢查使用者的認證
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //連結新增訂位頁面
    public function create()
    {
        return view('member.myreservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //設定 ReservationController 對應的 function
    //將表單送過來的資料用 Model 寫入資料庫
    public function store(Request $request)
    {
        $request->user()->reservations()->create([
            'bookdate' => $request -> bookdate,
            'booktime' => $request -> booktime,
            'count' => $request -> count,
            'remark' => $request -> remark
        ]);
        //設定頁面跳轉
        return redirect()->route('member.myreservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservations = Reservation::find($id);
        $data = ['reservation' => $reservations];
        return view('member.myreservation.cancel', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    //在 ReservationController 的 edit 內取得舊資料
    public function edit($id)
    {
        $reservations = Reservation::find($id);
        $data = ['reservation' => $reservations];
        return view('member.myreservation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    //在 ReservationController 的 update 內更新資料
    public function update(Request $request,$id)
    {
        $reservations = Reservation::find($id);
        $reservations->update($request->all());
        return redirect()->route('member.myreservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    //在 ReservationController 的 destroy 內刪除資料
    public function destroy($id)
    {
        Reservation::destroy($id);
        return redirect()->route('member.myreservation.index');
    }

}
