<?php

use Illuminate\Database\Seeder;

class projectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('projects')->insert([ 
            [
                'name' => "online auction",
                'description' => "Created an eBay-style online auction website",
                'languages_used' => "PHP, JavaScript, and MySQL",
                'status' => "completed",
                'created_at' => NOW()
            ],
            [
                'name' => "news feed",
                'description' => "Created a news site for news and business headlines, recent articles, and weather",
                'languages_used' => "React, Express, MongoDB and AuthO",
                'status' => "completed",
                'created_at' => NOW()
            ],
            [
                'name' => "food menu",
                'description' => "Created a menu chooser to select and store a menu for a given day",
                'languages_used' => "Angular, Express, MongoDB",
                'status' => "in progress",
                'created_at' => NOW()
            ]
        ]);
    }
}
