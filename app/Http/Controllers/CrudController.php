<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class CrudController extends Controller
{
    public function insertData(Request $request){
        date_default_timezone_set('Asia/Dhaka');
       $data = $request->except('_token');
       $tbl = decrypt($data['tbl']);
       unset($data['tbl']);
       $data['created_at'] = date('Y-m-d H:i:s');

       if ($request->hasFile('image')) {
           $data['image'] = $this->uploadImage($tbl, $data['image']);
       }

       $insert = DB::table($tbl)->insert($data);

       if ($insert) {
           Toastr::success('Data Successfully Inserted', 'Success');
           return redirect()->back();
        } else {
            return redirect()->back();
       }
    }
    public function updateData(Request $request){
        date_default_timezone_set('Asia/Dhaka');
       $data = $request->except('_token');
       $tbl = decrypt($data['tbl']);
       unset($data['tbl']);

       $data['updated_at'] = date('Y-m-d H:i:s');
              if ($request->hasFile('image')) {
              $data['image'] = $this->uploadImage($tbl, $data['image']);
        }
        
       $insert = DB::table($tbl)->where(key($data), reset($data))->update($data);
       if ($insert) {
           Toastr::success('Data Successfully Updated', 'Success');
           return redirect()->back();
        } else {
            return redirect()->back();
       }
    }

    public function uploadImage($location, $imagename){
        $name = $imagename->getClientOriginalName();
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
        return $location.'/'.date('ymdgis').$name;
    }
}
