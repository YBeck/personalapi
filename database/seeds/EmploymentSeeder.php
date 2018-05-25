<?php

use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employments')->insert([ 
            'name' => "Yeshiva Mesoras Avos",
            'address' => "23 Congress Street",
            'city' => "Lakewood",
            'state' => "NJ",
            'zip' => "08701",
            'description' => "Fourth grade general studies teacher",
            'date_started' => "September, 2017",
            'date_ended' => "June, 2018",
            'created_at' => NOW()
        ]);
           
    }
}
