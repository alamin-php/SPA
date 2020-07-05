<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class SettingController extends Controller
{
            public function __construct(){
                  $this->middleware('auth');
            }
            public function index(){
                  $setting = DB::table('settings')->where('id', '1')->first();
                  return view('backend.setting.index',['setting' => $setting]);
            }
            public function edit($id){

            }

            public function update(Request $request){
                $data = array();
                date_default_timezone_set('Asia/Dhaka');
                $data['address'] = $request->address;
                $data['phone1'] = $request->phone1;
                $data['phone2'] = $request->phone2;
                $data['website'] = $request->website;
                $data['fblink'] = $request->fblink;
                $data['twlink'] = $request->twlink;
                $data['instlink'] = $request->instlink;
                $data['lilink'] = $request->lilink;
                $data['updated_at'] = date('Y-m-d h:i:s');
                $image = $request->logo;
                if ($image) {
                $image_name = Str::random(5);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'upload/setting/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);

                if ($success) {
                $data['image'] = $image_url;
                $img = DB::table('settings')->where('id', '1')->first();
                $img_path = $img->image;
                $done = unlink($img_path);
                $save = DB::table('settings')->where('id', '1')->update($data);
                return redirect()->back();
                }

                }else{
                $save = DB::table('settings')->where('id', '1')->update($data);
                if ($save) {
                Toastr::success('Setting Successfully Update', 'Success');
                return redirect()->route('setting');
                }
                }
                }
            public function show($id){


            }
            public function delete($id){

            }
}
