<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffDashboardController extends Controller
{
    //
    public function index()
    {
        return view('Staff.dashboard.index');
    }

}
