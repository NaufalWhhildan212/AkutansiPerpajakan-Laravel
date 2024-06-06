<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        $data = Admin::where('Username', $request->input('Username'))->first();

        if ($data && Hash::check($request->input('Password'), $data->Password)) {
            session(['Username' => $data->Username]);
            return redirect('Dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
    public function showLoginForm()
    {
        return view('Auth.login');
    }
}
