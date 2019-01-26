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

                    'wrapper_title_color' => 'rgba(0,0,0,0.8)',
                    'wrapper_title_size' => '43.2px',
                    'wrapper_text_color' => 'rgba(0, 0, 0, 0.6)',
                    'wrapper_text_size' => '16px',
                    'wrapper_byline_text_color' => 'rgba(0, 0, 0, 0.5)',
                    'wrapper_byline_text_size' => '20.8px',
                    'wrapper_background_color' => 'rgb(255, 255, 255)',
                    
                    'welcome_title' => 'Main information',
                    'welcome_byline_text' => 'Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue',
                    'welcome_text' => 'This is Assembly, a free, fully standards-compliant CSS template designed by TEMPLATED. The photos in this template are from Fotogrph. This free template is released under the Creative Commons Attribution license, so you\'re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) ',

                    'welcome_title_color' => 'rgba(255, 255, 255, 0.8)',
                    'welcome_title_size' => '43.2px',
                    'welcome_text_color' => 'rgba(255, 255, 255, 0.8)',
                    'welcome_text_size' => '16px',
                    'welcome_byline_text_color' => 'rgba(255, 255, 255, 0.6)',
                    'welcome_byline_text_size' => '20.8px',
                    'welcome_background_color' => '#0681e5',
                    
                    'contact_title' => 'Contact Us',
                    'contact_byline_text' => 'Address:',
                    'contact_text' => 'Some Address',

                    'contact_title_color' => 'rgba(255, 255, 255, 0.8)',
                    'contact_title_size' => '43.2px',
                    'contact_text_color' => 'rgba(255, 255, 255, 0.8)',
                    'contact_text_size' => '16px',
                    'contact_byline_text_color' => 'rgba(255, 255, 255, 0.6)',
                    'contact_byline_text_size' => '20.8px',
                    'contact_background_color' => '#0ea85d',

                )
        ));
    }
}
