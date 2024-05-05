<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {

    }

    public function login()
    {
        return View('client.login');
    }

    public function register()
    {
        return View('client.register');
    }
}