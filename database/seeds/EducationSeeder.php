<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('education')->insert([
            [
                'name' => "Beth Medrash Govoha",
                'address' => "617 6th Street",
                'city' => "Lakewood",
                'state' => "NJ",
                'zip' => "08701",
                'degree' => "Bachelors Degree in Talmudic Law",
                'total_semesters' => "6",
                'semesters_per_year' => "2",
                'date_started' => "September, 2007",
                'date_ended' => "September, 2010",
                'created_at' => NOW()
            ],
            [
                'name' => "Beth Medrash Govoha",
                'address' => "617 6th Street",
                'city' => "Lakewood",
                'state' => "NJ",
                'zip' => "08701",
                'degree' => "Masters Degree in Rabbinic and Talmudic Studies",
                'total_semesters' => "14",
                'semesters_per_year' => "2",
                'date_started' => "September, 2010",
                'date_ended' => "April, 2018",
                'created_at' => NOW()
            ],
            [
                'name' => "The School of Evolving Technologies (PCS)",
                'address' => "1770 Madison Ave.",
                'city' => "Lakewood",
                'state' => "NJ",
                'zip' => "08701",
                'degree' => "cirtificate of completion of programming course",
                'total_semesters' => "5",
                'semesters_per_year' => "3",
                'date_started' => "September, 2017",
                'date_ended' => "April, 2018",
                'created_at' => NOW()
            ]
        ]);
    }
}
