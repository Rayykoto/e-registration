<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard', compact('user'));
    }
}
