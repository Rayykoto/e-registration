<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        // return view('auth.register');
    }

    public function store(Request $request)
    {
        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_lvl' => '1',
            'status' => 'active',
        ]);
        return redirect('register')->with('success', 'Data berhasil Disimpan');
    }
}
