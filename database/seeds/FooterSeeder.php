<?php

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Footer::create([
            'title_footer'  => 'CYR-HR',
            'desc_footer'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis orci eros, lacinia non tortor quis, molestie scelerisque lorem. Nam ligula ante, pulvinar non luctus ut, ultrices quis metus.',
        ]);
    }
}
