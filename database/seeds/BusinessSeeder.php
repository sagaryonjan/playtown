<?php

use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            'name' => 'Wannabees Family Play Town',
            'phone_number' => '481192825',
            'website' => 'www.wannabees.com',
            'address' => 'Frenchs Forest NSW 2086, Australia',
        ]);
    }
}
