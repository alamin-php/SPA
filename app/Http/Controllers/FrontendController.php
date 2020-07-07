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
        $setting = DB::table('settings')->where('id', '1')->first();

        $abouts = DB::table('abouts')->where('status', 'on')
        ->limit(4)
        ->orderBy('aid', 'DESC')
        ->get();
        
        return view('frontend.index',[
            'sliders' => $sliders,
            'setting' => $setting,
            'abouts' => $abouts]
        );
    }

    public function sendMessage(Request $request){

        $data = array();
         date_default_timezone_set('Asia/Dhaka');
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['intro'] = $request->intro;
        $data['status'] = "0";
        $data['created_at'] = date('Y-m-d h:i:s');
        $send = DB::table('contacts')->insert($data);
        if ($send) {
            Toastr::warning('Your Message Send to Successfully.', 'Thank You');
            return redirect()->back();
        } else {
            Toastr::danger('Somthig error here.', 'Send Error');
           return redirect()->back();
        }
        
    }
}
