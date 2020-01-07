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
    //設定 OrderController 對應的 function
    //將表單送過來的資料用 Model 寫入資料庫
    public function store(Request $request)
    {
        $request->user()->items()->create([
            'product_id' => $request -> product_id,
            'count' => $request -> count,
        ]);
        $request->user()->orders()->create([
            'remark' => $request -> remark
        ]);
        $request->save();
        //設定頁面跳轉
        return redirect()->route('member.myorder.index');
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
    //在 OrderController 的 edit 內取得舊資料
    public function edit($id)
    {
        $proudcts = Product::orderBy('id')->get();
        $orders = Order::find($id);
        $items = Item::find($id);
        $data = ['products'=>$proudcts,'order' => $orders,'item' => $items];
        return view('member.myorder.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    //在 OrderController 的 update 內更新資料
    public function update(Request $request,$id)
    {
        $items =Item::find($id);
        $items->update($request->all());
        $orders = Order::find($id);
        $orders->update($request->all());
        $orders->save();
        $items->save();
        return redirect()->route('member.myorder.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    //在 OrderController 的 destroy 內刪除資料
    public function destroy($id)
    {
        Order::destroy($id);
        Item::destroy($id);
        return redirect()->route('member.myorder.index');
    }
}
