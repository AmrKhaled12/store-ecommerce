<?php

use App\Http\Controllers\Admin\Admin_panel_SettingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'guest:admin'],function(){
    Route::get('/show_login',[AdminController::class,'show_login_page'])->name('show');
    Route::post('/login',[AdminController::class,'check_admin'])->name('login');



});




Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[AdminController::class,'logout_admin'])->name('logout');
    Route::get('/panel_setting',[Admin_panel_SettingController::class,'index'])->name('admin.panel_setting');
    Route::get('/edit_setting/{com_code}',[Admin_panel_SettingController::class,'retrive_data_to_edit'])->name('edit');


});


