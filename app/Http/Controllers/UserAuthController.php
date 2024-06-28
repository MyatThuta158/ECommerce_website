<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function Login(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Subset of data from an array
        $credentials = $request->only('email', 'password');

        // Get email
        $email = $credentials['email'];

        // Check if the customer exists
        if ($user = User::where('email', $email)->first()) {
            if (Hash::check($credentials['password'],$user->password)) {
                Auth::guard('web')->login($user);
                return redirect()->intended('/');
            }
        }
        // Check if the staff exists
        elseif ($staff = Staffs::where('StaffEmail', $email)->first()) {
            if (Hash::check($credentials['password'], $staff->StaffPassword)) {
                Auth::guard('admins')->login($staff);
                return redirect()->intended('/StaffRegister');
            }
        }

        // If no user is found or login failed, redirect back with an error
        return redirect()->back()->with('failLogin', 'Fail to Login');
    }
}
