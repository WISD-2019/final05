<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CofeController extends Controller
{

    public function index()
    {
        return view('cofe');
    }

    //連結咖啡系列頁面
    public function product()
    {
        return view('products');
    }

    //連結其他產品頁面
    public function other()
    {
        return view('other');
    }

    //連結簡介頁面
    public function about()
    {
        return view('about');
    }

    //連結聯絡我們頁面
    public function contect()
    {
        return view('contect');
    }

    //連結公告頁面
    public function news()
    {
        return view('news');
    }

    //連結搜尋頁面
    public function search()
    {
        return view('search');
    }
}
