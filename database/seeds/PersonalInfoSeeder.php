<?php

use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('personal_info')->insert([   
            'name' => "Yochanan Beck",
            'email' => "ybeck115@gmail.com",
            'job' => "",
            'website' => "",
            'repo' => "https//github.com/YBeck/",
            'linkedin' => "www.linkedin.com/in/yochanan-beck",
            'created_at' => NOW()
        ]);
    }
}


