<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        Register::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_pwd' => Hash::make($request->user_pwd),
            'user_lvl' => '1',
        ]);
        return redirect('register')->with('success', 'Data berhasil Disimpan');
    }
}
