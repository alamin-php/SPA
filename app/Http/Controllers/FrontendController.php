<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{

    public function index(){
        $sliders = DB::table('sliders')->where('status', 'on')->get();
        return view('frontend.index',['sliders' => $sliders]);
    }
}
