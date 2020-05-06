<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Billys Burgers',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '14 Mountain Rd',
            'address_2' => '',
            'city' => 'Glen Burnie',
            'state' => 'MD',
            'zipcode' => '21060',
            'phone_number' => '347-231-4545',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
