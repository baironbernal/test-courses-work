<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Course::class, 20)->create();
    }
}
