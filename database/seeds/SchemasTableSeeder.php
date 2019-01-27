<?php

use Illuminate\Database\Seeder;

class SchemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('schemas')->delete();

        \DB::table('schemas')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Schema_1',
                )
        ));
    }
}
