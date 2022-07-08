<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Vendor;
use App\Models\EventOrganizer;

class GeneralController extends Controller
{
    //------Login------
    //=================
    public function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if (Auth::attempt($req->only('email', 'password'))) {
            if ($user->levels == 'admin') {
                return redirect('/admin/dashboard');
            } else if($user->levels == 'user') {
                return redirect('/user/dashboard');
            } else if($user->levels == 'vendor') {
                return redirect('/vendor/dashboard');
            } else if($user->levels == 'event-organizer') {
                return redirect('/event-organizer/dashboard');
            } else {
                dd('error accuired, contact our admin for more information');
            }
        }
        else {
            return redirect('/login')->with('error', 'Email atau Password salah!');
        }
    }

    //------Registration------
    //=========================
    public function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->levels = 'user';
        $user->save();
        return redirect('/login')->with('success', 'Berhasil mendaftar!');
    }

    //------User to Vendor------
    //=========================
    public function vendorRegistration(Request $req){
        $current_user = User::where([
            'email' => Auth::user()->email,
            'levels' => 'user'
        ])->first();

        Vendor::create([
            "name" => $current_user->name,
            "address" => $req->address,
            "phone" => $req->phone,
            "email" => $current_user->email,
            "website" => $req->website,
            "NPWP" => $req->NPWP,
        ]);

        $current_user->update([
            "levels" => "vendor"
        ]);

        return redirect("/login")->with("success", "Berhasil mendaftar!");
    }

    //------User to EO------
    //======================
    public function eventOrganizerRegistration(Request $req){
        $current_user = User::where([
            'email' => Auth::user()->email,
            'levels' => 'user'
        ])->first();

        EventOrganizer::create([
            "name" => $current_user->name,
            "address" => $req->address,
            "phone" => $req->phone,
            "email" => $current_user->email,
            "website" => $req->website,
            "NPWP" => $req->NPWP,
        ]);

        $current_user->update([
            "levels" => "event-organizer"
        ]);

        return redirect("/login")->with("success", "Berhasil mendaftar!");
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
