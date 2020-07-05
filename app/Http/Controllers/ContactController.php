<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
            public function __construct(){
            $this->middleware('auth');
            }

            public function index(){
            $messages = DB::table('contacts')->get();
            return view('backend.contact.index',['messages'=> $messages]);
            }
            public function add(Request $request){

            }
            public function read($id){
            $message = DB::table('contacts')->where('id', $id)->first();
            if ($message) {
                  $data['status'] = "1";
                  DB::table('contacts')->where('id', $id)->update($data);
            }
            return view('backend.contact.read',['message'=> $message]);
            }

            public function update(Request $request, $id){

            }
            public function show($id){


            }
            public function delete($id){
                  $delete = DB::table('contacts')->where('id', $id)->delete();
            if ($delete) {
                  Toastr::success('Your Message Delete to Successfully.', 'Thank You');
                  return redirect()->back();
            } else {
                  Toastr::danger('Somthig error here.', 'Delete Error');
                  return redirect()->back();
            }
            }
}
