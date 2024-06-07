<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord(){
        return view('admin.dashboard');
    }

    public function commandes(){
        return view('admin.commandes');
    }
}
