<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class ServiceController extends Controller
{
            public function __construct(){
            $this->middleware('auth');
            }

            public function index(){
            $data = DB::table('services')->get();
            return view('backend.service.index',['data'=>$data]);
            }
            public function create(Request $request){
                  return view('backend.service.create');
            }
            public function edit($id){
            $data = DB::table('services')->where('id', $id)->first();
            return view('backend.service.edit', ['data'=>$data]);
            }
            public function show($id){


            }
            public function delete($id){
                  DB::table('services')->where('id', $id)->delete();
                  Toastr::success('Data Successfully Deleted', 'Success');
                  return redirect()->back();
            }
}
