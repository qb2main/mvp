<?php

use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('header')->delete();

        \DB::table('header')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'logo_text' => 'Assembly',
                    'text' => 'Consectetuer adipiscing elit',
                    'byline_text' => 'Donec pulvinar ullamcorper metus',
                )
        ));

    }
}
