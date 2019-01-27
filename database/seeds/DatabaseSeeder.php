<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SchemasTableSeeder::class);
         $this->call(HeadersTableSeeder::class);
         $this->call(ContentsTableSeeder::class);
         $this->call(FootersTableSeeder::class);
    }
}
