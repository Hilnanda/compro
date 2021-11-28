<?php

use Illuminate\Database\Seeder;

class CopyrightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Copyright::create([
            'title_copyright'  => 'Content Copyright by (Tanda R) CYRHR Web design by globaltechcode.com']);
    }
}
