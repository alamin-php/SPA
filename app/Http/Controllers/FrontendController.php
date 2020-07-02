<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class FrontendController extends Controller
{

    public function index(){
        $sliders = DB::table('sliders')->where('status', 'on')->get();
        return view('frontend.index',['sliders' => $sliders]);
    }

    public function sendMessage(Request $request){
        Toastr::warning('Your Message Send to Successfully.', 'Thank You');
        return redirect()->back();
    }
}
