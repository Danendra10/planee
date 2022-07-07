<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorData;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function VendorDataInput(Request $request){
        $vendor = User::where([
            'email' => Auth::user()->email,
            'levels' => 'vendor'
        ])->first();

        VendorData::create([
            'email' => $vendor->email,
            'services' => $request->services,
            'lower_price' => $request->lower_price,
            'upper_price' => $request->upper_price,
            'description' => $request->description
        ]);
        return redirect('/vendor/add-services')->with('success', 'data has been added, check your services to make sure');
    }

    public function myServices(){
        $vendor = User::where([
            'email' => Auth::user()->email,
            'levels' => 'vendor'
        ])->first();
        $vendor_data = VendorData::where('email', $vendor->email)->get();
        // dd($vendor_data);
        return view('vendor.my-services', ['vendor_data' => $vendor_data]);
    }
}
