<?php

namespace App\Http\Controllers;

use App\Models\CustomerBillRecording;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends OperatorController
{
    public function viewUsers()
    {
        return view('operator_users',['title' => 'Users', 'data' => Users::all()]);
    }

    public function viewUser_add()
    {
        return view('operator_user_add',['title' => 'User Add']);
    }

    public function postUser_add(Request $request)
    {

        $validated = $request->validate([
            "name" => "required|min:3",
            "username" => "required|min:3|unique:users,username",
            "password" => "required|min:3",
            "address" => "nullable",
            "number" => "numeric|required"
        ]);
        Users::create($validated);
        return redirect('admin_area/users');
    }

    public function postUser_delete(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,user_id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $validatedData = $validator->validated();
        $userId = $validatedData['user_id'];

        // Mencari dan menghapus user berdasarkan ID
        $user = Users::find($userId);

        if ($user) {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully.']);
        }
        return redirect('admin_area/users');
    }


}
