<?php

namespace App\Http\Controllers;

use App\Models\CustomerBillRecording;
use App\Models\Customers;
use App\Models\ImageData;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OperatorController extends Controller
{
    public function catatan()
    {
        return view('operator_pencatatan',['title' => 'Pencatatan','data' => CustomerBillRecording::all()->sortBy('no_sl')]);
    }

    public function viewData(CustomerBillRecording $billRecording)
    {
        return view('operator_pencatatan_view',['title' => 'View', 'data' => $billRecording]);
    }

    public function meterData(CustomerBillRecording $billRecording)
    {
        return view('operator_pencatatan_view_meter',['title' => 'View Meter','id' => $billRecording->no_sl, 'photos' => $billRecording->images]);
    }

    public function uploadMeterFoto(Request $request,CustomerBillRecording $billRecording)
    {
        $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $photo = new ImageData();
        $photo->record_id = $billRecording->record_id;
        $photo->image_data = base64_encode(file_get_contents($request->file('photo')->getRealPath()));
        $photo->save();
        return redirect()->back();
    }

    public function viewCustomerData(Request $request)
    {

        // Mengambil data berdasarkan rentang ID
        return view('operator_customers',['title' => 'Customers',
            'data' => Customers::with('user')->get()]
        );
    }

    public function postCustomer_delete(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'no_sl' => 'required|integer|exists:customers,no_sl',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $validatedData = $validator->validated();
        $no_sl = $validatedData['no_sl'];

        $user = Customers::find($no_sl);

        if ($user) {
            $user->delete();
            return redirect()->back();
        }
        return redirect('admin_area/users');
    }
}
