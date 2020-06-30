<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
        public function __construct(){
        $this->middleware('auth');
        }

        public function logout(){
        Auth::logout();
        return redirect()->route('login');
        }
}
