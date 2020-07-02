<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
        public function __construct(){
                $this->middleware('auth');
        }

        public function index(){
                $sliders = DB::table('sliders')->get();
                return view('backend.slider.index', ['sliders' => $sliders]);
        }
        public function add(Request $request){
                $request->validate([
                'title' => 'bail|required|unique:sliders|max:255',
                'intro' => 'required',
                'btn_text' => 'required',
                'btn_class' => 'required',
                'status' => 'required',
                ]);
                
                $data = array();
                date_default_timezone_set('Asia/Dhaka');
                $data['title'] = $request->title;
                $data['intro'] = $request->intro;
                $data['btn_text'] = $request->btn_text;
                $data['btn_class'] = $request->btn_class;
                $data['status'] = $request->status;
                $data['created_at'] = date('Y-m-d H:i:s');
                $image = $request->file('image');

        if ($image) {
                $image_name = Str::random(5);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'upload/slider/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);
                if ($success) {
                $data['image'] = $image_url;
                $save = DB::table('sliders')->insert($data);
                if ($save) {
                Toastr::success('Slider Successfully Added', 'Success');
                return redirect()->back();
                }
                }
        }


        }
        public function edit($id){
                $slider = DB::table('sliders')->where('id', $id)->first();
                return view('backend.slider.edit', ['slider' => $slider]);
        }
        public function update(Request $request, $id){
                $request->validate([
                'title' => 'bail|required',
                'intro' => 'required',
                'btn_text' => 'required',
                'btn_class' => 'required',
                'status' => 'required',
                ]);

                $data = array();
                date_default_timezone_set('Asia/Dhaka');
                $data['title'] = $request->title;
                $data['intro'] = $request->intro;
                $data['btn_text'] = $request->btn_text;
                $data['btn_class'] = $request->btn_class;
                $data['status'] = $request->status;
                $data['updated_at'] = date('Y-m-d h:i:s');
                $image = $request->file('image');
                if ($image) {
                $image_name = Str::random(5);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'upload/slider/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);

                if ($success) {
                        $data['image'] = $image_url;
                        $img = DB::table('sliders')->where('id', $id)->first();
                        $img_path = $img->image;
                        unlink($img_path);
                        $save = DB::table('sliders')->where('id', $id)->update($data);
                        if ($save) {
                        Toastr::success('Slider Successfully Update', 'Success');
                        return redirect()->back();
                        }
                }

                }else{
                        $save = DB::table('sliders')->where('id', $id)->update($data);
                        if ($save) {
                        Toastr::success('Slider Successfully Update', 'Success');
                        return redirect()->back();
                }
                }
        }
        public function show($id){
                $show = DB::table('sliders')->where('id', $id)->first();
                return view('backend.slider.show', ['show' => $show]);
                
        }
        public function delete($id){
             $getImage = DB::table('sliders')->where('id', $id)->first();
             $imag_path = $getImage->image;
             unlink($imag_path);
             $del = DB::table('sliders')->where('id', $id)->delete();
             if ($del) {
                 Toastr::success('Slider Successfully Deleted', 'Success');
                 return redirect()->back();
             }   
        }
}
