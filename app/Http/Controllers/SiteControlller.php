<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControlller extends Controller
{
    public function __construct()
    {

    }

    public function dashboardClient()
    {
        return view('client.dashboard');
    }

    
}