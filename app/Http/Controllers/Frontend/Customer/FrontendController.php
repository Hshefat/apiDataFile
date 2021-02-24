<?php

namespace App\Http\Controllers\Frontend\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function frontinside()
    {
        return view('frontend/frontinside');
    }
    public function registercustomer()
    {
        return view('frontend/customer/create_customer');
    }
}