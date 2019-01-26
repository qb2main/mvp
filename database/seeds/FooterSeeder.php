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
        \DB::table('footer')->delete();

        \DB::table('footer')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'text' => 'Footer text',
                )
        ));
    }
}
