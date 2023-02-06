<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_login_page(){
        return view('admin.auth.login');
    }

    public function check_admin(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(
            ['username' => $request->input('username'), 'password' => $request->input('password')])
        )
        {
            return redirect()->route('admin.dashboard');

        }

    }
    public function logout_admin(){
        auth()->guard('admin')->logout();
        return redirect()->route('show');
    }
//    public function insert_admin(){
//        $admin=new Admin();
//        $admin->name='admin';
//        $admin->email='test@gmail.com';
//        $admin->username='admin';
//        $admin->password=bcrypt('admin');
//        $admin->com_code=1;
//        $admin->save();
//    }

}
