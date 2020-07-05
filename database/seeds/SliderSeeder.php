<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
        'image' => 'upload/slider/default.jpg',
        'title' => 'Lorem ipsum dolor sit amet.',
        'intro' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aut.',
        'btn_text' =>'Download',
        'btn_class' =>'common',
        'status' =>'on',
        ]);
    }
}
