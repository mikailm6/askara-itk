<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userHome()
    {
        return view('dashboard.user');
    } 
   
    public function mitraHome()
    {
        return view('dashboard.mitra');
    }

    public function adminHome()
    {
        return view('dashboard.admin');
    }    
}
