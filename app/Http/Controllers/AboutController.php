<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class AboutController extends Controller
{
            public function __construct(){
            $this->middleware('auth');
            }

            public function index(){
                 $abouts = DB::table('abouts')
                 ->orderBy('aid', 'DESC')
                 ->get();
                  return view('backend.about.index', ['abouts'=>$abouts]);
            }

            public function create(){
                  return view('backend.about.create');
            }

            public function edit($id){
                  $about = DB::table('abouts')->where('aid', $id)->first();
                  return view('backend.about.edit', ['about'=>$about]);
            }

            public function delete($id){
                  $image = DB::table('abouts')->where('aid', $id)->first();
                  $img_path = $image->image;
                  unlink($img_path);
                  $delete = DB::table('abouts')->where('aid', $id)->delete();
                  if ($delete) {
                        Toastr::success('Data Successfully Deleted', 'Success');
                        return redirect()->back();
                  } else {
                        return redirect()->back();
                  }
            }
}
