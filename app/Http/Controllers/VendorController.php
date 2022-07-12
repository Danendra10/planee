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
            'description' => $request->description,
            'material' => $request->material,
        ]);
        return redirect('/vendor/add-services')->with('success', 'data has been added, check your services to make sure');
    }

    public function myServices(){
        $vendor = User::where([
            'email' => Auth::user()->email,
            'levels' => 'vendor'
        ])->first();
        $vendor_data = VendorData::where('email', $vendor->email)->get();
        return view('vendor.my-services', ['vendor_data' => $vendor_data]);
    }

    public function editServices($id)
    {
        $vendorData = VendorData::find($id);
        return view('vendor.edit-services', ['vendorData' => $vendorData]);
    }

    public function editServicesConfirm(Request $request){
        if(VendorData::where('id', $request->id)->update([
            'services' => $request->services,
            'lower_price' => $request->lower_price,
            'upper_price' => $request->upper_price,
            'description' => $request->description,
            'material' => $request->material,
        ])){
            return redirect('/vendor/my-services')->with('updateSuccess', 'data has been updated');
        } else
            return redirect('/vendor/my-services')->with('updateFailed', 'data has not been updated');
    }

    public function deleteServices($id){
        if(VendorData::where('id', $id)->delete()){
            return redirect('/vendor/my-services')->with('deleteSuccess', 'data has been deleted');
        } else
            return redirect('/vendor/my-services')->with('deleteFailed', 'data has not been deleted');
    }
}
