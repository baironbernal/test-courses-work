<?php

use App\Models\TypeCourse;
use Illuminate\Database\Seeder;

class TypeCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeCourse::create(["name" => "Matematicas"]);
        TypeCourse::create(["name" => "Ciencias Basicas"]);
        TypeCourse::create(["name" => "Learning to Fly"]);
        TypeCourse::create(["name" => "Programacion"]);
        TypeCourse::create(["name" => "Fisica Mecanica"]);
        TypeCourse::create(["name" => "Inteligencia artificial"]);
    }
}
