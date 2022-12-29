<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\Authenticate;

class AdminController extends Controller
{
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function Login(){
        return Redirect()->route('login');
    }

    
}
