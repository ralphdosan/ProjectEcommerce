<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function LoginPage()
    {
        if(Auth::user() && Auth::user()->role == 0)
        {
            return redirect('/admin/dashboard');
        }
        elseif(Auth::user() && Auth::user()->role == 1){

            return redirect('/secretary/dashboard');
        }
        else if(Auth::user() && Auth::user()->role == 2)
        {
            return redirect('/seller/dashboard');
        }
        return view('logreg.login');
    }

    public function LoginPost( Request $request)
    {
        $request->validate([

            'email' => 'required|email',
        ]);

        $userinfo = $request->only('email','password');

        if (Auth::attempt($userinfo)) {
            
            if(Auth::user()->role == 0)
            {
                return redirect('/admin/dashboard');
            }
            elseif(Auth::user()->role == 1)
            {
                return redirect('/producer/dashboard');
            }
            elseif(Auth::user()->role == 2)
            {
                $user = Auth::User();
                Session::put('id', $user->id);
                return redirect('/seller/dashboard');
            }
            else {

                return back()->with('error', 'You are not user');
            }
            
        } else {
            
            return back()->with('error', 'Username and Password is incorrect.');
        } 
    }

    public function SellerDashboard()
    {
        return view('sellers.seller');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
