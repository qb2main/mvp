<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('content')->delete();

        \DB::table('content')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'wrapper_title' => 'About Us',
                    'wrapper_text' => 'Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad  torquent per conubia nostra.',
                    'wrapper_byline_text' => 'Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue',

                    'welcome_title' => 'Main information',
                    'welcome_byline_text' => 'Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue',
                    'welcome_text' => 'This is Assembly, a free, fully standards-compliant CSS template designed by TEMPLATED. The photos in this template are from Fotogrph. This free template is released under the Creative Commons Attribution license, so you\'re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) ',

                    'contact_title' => 'Contact Us',
                    'contact_byline_text' => 'Address:',
                    'contact_text' => 'Some Address',

                )
        ));
    }
}
