<?php

namespace App\Http\Controllers;

use App\Models\Company;
<<<<<<< HEAD
=======
use App\Models\Patient;
>>>>>>> 7fd9f40b007b0345960f4d4fe72eb750c02f77de
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where(['user_lvl' => 'user'])->count();
        $company = Company::count();
<<<<<<< HEAD
        return view('admin.dashboard', compact('user','company'));
=======
        $patient = Patient::count();
        return view('admin.dashboard', compact('user', 'company', 'patient'));
>>>>>>> 7fd9f40b007b0345960f4d4fe72eb750c02f77de
    }
}
