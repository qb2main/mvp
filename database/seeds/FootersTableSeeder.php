<?php

use Illuminate\Database\Seeder;

class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('footers')->delete();

        \DB::table('footers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'schema_id' => 1,
                    'text' => 'Footer text',
                    'text_size' => '16px',
                    'text_color' => 'rgb(255, 255, 255)',
                    'background_color' => 'black',
                )
        ));
    }
}
