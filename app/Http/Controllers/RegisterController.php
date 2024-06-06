<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'Username' => ['required', 'string', 'max:50'],
            'Email' => ['required', 'string', 'max:50'],
            'Password' => ['required', 'string', 'max:225', 'min:4'],
        ]);

        $admin = Admin::create([
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),
        ]);
        
        return redirect('login')->with('success', 'Pendaftaran berhasil silahkan login');
    }
    public function showRegistrationForm()
    {
        return view('Auth.Register');
    }
}
