<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where(['user_lvl' => 'user'])->count();
        $company = Company::count();
        $patient = Patient::count();
        // $check = Company::sum('company_city');
        return view('admin.dashboard', compact('user', 'company', 'patient'));
    }
}
