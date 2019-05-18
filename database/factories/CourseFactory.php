<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use App\Models\Course;
use App\Models\TypeCourse;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    $users = User::with('roles')->get();
    $type_courses = TypeCourse::all()->toArray();
    $rand = array_rand($type_courses);

    foreach ($users as $item) {
        $operator = null;     
        if ($item->hasRole('admin')) {
            $operator = $item;
            
            break;            
        }
    }


    return [
        'name' => $faker->name,
        'duration' => $faker->name,
        'type_course_id' => $type_courses[$rand]['id'],
        'user_id' => $operator->id
    ];
});
