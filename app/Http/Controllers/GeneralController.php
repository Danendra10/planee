<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


use App\Models\User;
use App\Models\Vendor;
use App\Models\EventOrganizer;
use App\Models\VendorData;

class GeneralController extends Controller
{
    //------Login------
    //=================
    public function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        $user_data = User::where('email', $req->email)->get();
        // dd($user_data);
        if (Auth::attempt($req->only('email', 'password'))) {
            if ($user->register_status) {
                if ($user->levels == 'admin') {
                    return redirect('/admin/dashboard');
                } else if ($user->levels == 'user') {
                    return redirect('/user/dashboard');
                } else if ($user->levels == 'vendor') {
                    return redirect('/vendor/dashboard');
                } else if ($user->levels == 'event-organizer') {
                    return redirect('/event-organizer/dashboard');
                } else {
                    dd('error accuired, contact our admin for more information');
                }
            } else {
                return redirect('/login')->with('error', 'You need to verify your account!');
            }
        } else {
            return redirect('/login')->with('error', 'Email atau Password salah!');
        }
    }

    //------Registration------
    //=========================
    public function register(Request $req)
    {
        $input['email'] = $req->email;
        $input['password'] = $req->password;
        $email_target = $req->email;

        // User register rules
        $rules = array('email' => 'required|email|unique:users', 'password' => 'required|min:8');

        $validator = Validator::make($input, $rules);
        // dd($validator);

        if ($validator->fails())
            return redirect('/register')->with('error', 'Email atau Password sudah ada!');
        else {
            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'levels' => 'user',
                'profile_picture' => $req->profile_picture->store('public/profile_picture'),
            ]);

            $user_target = User::where('email', $email_target)->first();

            $data = array(
                'id' => $user_target->id,
            );

            Mail::send('email.verifikasi', $data, function ($message) use ($email_target) {
                $message->to($email_target, $email_target)
                    ->subject('VERIFIKASI AKUN PLANEE');
            });

            //menambahkan logic untuk kirim email verif
            return redirect('/login')->with('success', 'Berhasil mendaftar! Mohon cek email anda untuk verifikasi akun!');
        }
    }

    public function verifikasiAkun($id)
    {
        $sukses = User::where(['id' => $id])->update(['register_status' => '1']);

        if ($sukses)
            return redirect('/login')->with('success', 'Akun anda berhasil diverifikasi, silahkan login');
        else
            return redirect('/login')->with('failed', 'Akun anda gagal diverifikasi');
    }

    //------User to Vendor------
    //=========================
    public function vendorRegistration(Request $req)
    {
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

        return redirect("/vendor/dashboard")->with("success", "Berhasil mendaftar!");
    }

    //------User to EO------
    //======================
    public function eventOrganizerRegistration(Request $req)
    {
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

        return redirect("/event-organizer/dashboard")->with("success", "Berhasil mendaftar!");
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    //Vendor List
    public function vendorList()
    {
        $vendor = VendorData::all();
        // dd($vendor);
        if (request('search'))
            $vendor = VendorData::where('services', 'like', '%' . request('search') . '%')->get();

        return view('user.vendor-list', compact('vendor'));
    }

    public function vendorServices($id)
    {
        $vendor = VendorData::where('id', $id)->first();
        $name = Vendor::where('email', $vendor->email)->first();
        $vendor_name = $name->name;
        // dd($vendor_name);
        return view('user.vendor-services', compact('vendor', 'vendor_name'));
    }

    //----Contact Admin----
    //=====================
    public function contactAdmin(Request $request)
    {
        if (Auth::check()) {
            $input['email'] = $request->email;
            $input['message'] = $request->message;
            $input['name'] = $request->name;
            $input['phone'] = $request->phone;
            $subject = $request->subject;
            $email_target = $request->email;

            // User register rules
            $rules = array('email' => 'required|email', 'message' => 'required');

            $validator = Validator::make($input, $rules);
            // dd($validator);

            if ($validator->fails())
                return redirect('/contact')->with('error', 'Email atau Password salah!');
            else {
                $data = array(
                    'email' => $request->email,
                    'messages' => $request->message,
                    'name' => $request->name,
                    'phone' => $request->phone,
                );

                Mail::send('email.contact-admin', $data, function ($message) use ($email_target, $subject) {
                    $message->from($email_target);
                    
                    $message->to('planeeidn@gmail.com', 'Planee')
                        ->subject($subject);
                });

                //menambahkan logic untuk kirim email verif
                return redirect('/main/contact')->with('success', 'Berhasil mengirim pesan!');
            }
        }
        else{
            dd('masuk?');
            return view('/login')->with("error", "Anda harus login terlebih dahulu");
        }
    }
}
