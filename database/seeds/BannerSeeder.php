<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Banner::create([
            'banner_image'  => 'example.jpg',
            'banner_text1'  => 'Isi Text 1 Banner disini',
            'banner_text2'  => 'Isi Text 2 Banner disini',
            'banner_text3'  => 'Isi Text 3 Banner disini',
            'banner_text4'  => 'Isi Text 4 Banner disini',
            'banner_text5'  => 'Isi Text 5 Banner disini',
        ]);
    }
}
