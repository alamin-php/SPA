<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('settings')->insert([
                'image' => 'upload/setting/default.png',
                'address' => 'ex: 12A, Savar, Dhaka, Bangladesh.',
                'phone1' =>'0178XXXXXXX',
                'phone2' =>'0182XXXXXXX',
                'website' =>'https://amsoftit.com',
                'fblink' =>'https://facebook.com',
                'twlink' =>'https://twitter.com/explore',
                'instlink' =>'https://www.instagram.com/',
                'lilink' =>'https://www.linkedin.com/jobs',
                ]);
    }
}
