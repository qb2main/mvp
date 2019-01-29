<?php

use Illuminate\Database\Seeder;

class SeoPropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('seo_properties')->delete();

        \DB::table('seo_properties')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'schema_id' => 1,
                    'title' => 'Assembly corporation',
                    'keywords' => 'car, truck, trailer, engine',
                    'description' => 'Cars from all over the world',
                )
        ));
    }
}
