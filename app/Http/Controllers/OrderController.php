<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
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

    //連結我的訂餐頁面
    public function myorder(Request $request)
    {
        //顯示已有的訂餐
        //由 DB 擷取使用者所有的訂餐
        $orders = Order::where('user_id', $request->user()->id)->get();
        $items = Item::orderBy('id')->get();
        $proudcts = Product::orderBy('id')->get();
        $data= ['orders'=>$orders,'items'=>$items,'products'=>$proudcts];
        return view('member.myorder.index', $data);
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
    //連結新增訂餐頁面
    public function create()
    {
        $proudcts = Product::orderBy('id')->get();
        $data= ['products'=>$proudcts];
        return view('member.myorder.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}
