<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Session;

class Authcontroller extends Controller
{
    //
    public function login(){
        if(Session('loginid')){
            return redirect('/admin/dashboard');
        }
        return view('pages-admin.login.index');
    }
    public function loginProcess(Request $request){
        $user = $request->user;

        $getUserEmail = Admin::where('email', $user);
        $getUsername = Admin::where('username', $user);

        if($getUserEmail->get()->count() > 0){
            $getUserData = $getUserEmail->first();
            if(Hash::check($request->password, $getUserData->password)){
                $request->session()->put('loginid', $getUserData->id);
                return redirect('/admin/dashboard');
            } else {
                return back()->with('failedLogin', 'failedLogin');
            }
        } else{
            if($getUsername->get()->count() > 0){
                $getUserData = $getUsername->first();
                if(Hash::check($request->password, $getUserData->password)){
                    $request->session()->put('loginid', $getUserData->id);
                    return redirect('/admin/dashboard');
                } else {
                    return back()->with('failedLogin', 'failedLogin');
                }
            } else{
                return back()->with('failedLogin', 'failedLogin');
            }
        }
    }
    public function logout(Request $request){
        if(Session::has('loginid')){
            Session::pull('loginid');
            return redirect('/')->with('endSession', 'endSession');
        }
    }
}
