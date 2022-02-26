<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function myprofile()
    {
        return view('customer.myprofile');
    }

    public function account()
    {
        return view('customer.account');
    }

    public function product()
    {
        return view('customer.product');
    }
    
}
