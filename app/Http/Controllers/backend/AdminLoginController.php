<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin-auth.admin-login');
        }

        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;
            $remember = $request->remember;


                if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
                    return redirect()->intended(route('dashboard'));
                } else {
                    echo "Invalid Access";
                }
            }

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin-login'));
    }
}
