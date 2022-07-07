<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout(Request $req){
        $req->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
