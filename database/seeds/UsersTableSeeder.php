<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Billy',
            'lname' => 'Smith',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('highlife'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Johnson',
            'email' => 'cindy@gmail.com',
            'password' => Hash::make('highlife'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('highlife'),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
            ]);
        } 
    }
}
