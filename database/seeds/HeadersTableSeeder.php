<?php

use Illuminate\Database\Seeder;

class HeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('headers')->delete();

        \DB::table('headers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'schema_id' => 1,
                    'logo_text' => 'Assembly',
                    'text' => 'Consectetuer adipiscing elit',
                    'byline_text' => 'Donec pulvinar ullamcorper metus',
                    'text_color' => 'rgb(255, 255, 255)',
                    'text_size' => '64px',
                    'byline_text_color' => 'rgba(255, 255, 255, 0.6)',
                    'byline_text_size' => '32px',
                    'logo_text_color' =>'rgb(255, 255, 255)',
                    'logo_text_size' => '41.6px',
                    'menu_text_color' => 'rgb(255, 255, 255)',
                    'menu_text_size' => '12.8px',
                )
        ));
    }
}
