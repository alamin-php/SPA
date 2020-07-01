<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
            public function __construct(){
            $this->middleware('auth');
            }

            public function index(){

            return view('backend.slider.index');
            }
            public function add(Request $request){

            }
            public function edit($id){

            return view('backend.slider.edit');
            }
            public function update(Request $request, $id){

            }
            public function show($id){


            }
            public function delete($id){

            }
}
