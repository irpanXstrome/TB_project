<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;

Route::redirect('/','/dashboard');
Route::get('/dashboard', function () {
    return view('welcome',['title' => 'Dashboard']);
});

Route::get('/operator_area/pencatatan',[OperatorController::class,'catatan']);
Route::get('/operator_area/pencatatan/view/{billRecording:no_sl}',[OperatorController::class,'viewData']);
Route::get('/operator_area/pencatatan/view/{billRecording:no_sl}/meter',[OperatorController::class,'meterData']);
Route::post('/operator_area/pencatatan/view/{billRecording:no_sl}/meter',[OperatorController::class,'uploadMeterFoto']);

Route::get('/operator_area/customers',[OperatorController::class,'viewCustomerData']);

Route::get('/admin_area/users',[AdminController::class,'viewUsers']);
Route::get('/admin_area/user/add',[AdminController::class,'viewUser_add']);
Route::post('/api/v1/user/add',[AdminController::class,'postUser_add']);
Route::post('/api/v1/user/delete',[AdminController::class,'postUser_delete']);
Route::post('/api/v1/customer/delete',[OperatorController::class,'postCustomer_delete']);


