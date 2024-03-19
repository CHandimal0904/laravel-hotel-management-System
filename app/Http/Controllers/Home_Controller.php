<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home_Controller extends Controller
{
    public function index(){
        return view("home");
    }

    public function redirects()
    {
        $usertype= Auth::user('admin.adminhome')->usertype;

        if ($usertype=='1') {
            return view();
        }else{
            return view('home');
        }

    }
}
