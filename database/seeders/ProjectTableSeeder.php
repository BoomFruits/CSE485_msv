<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departmentsId = Department::pluck('DepartmentID')->toArray();
        for($i = 0 ;$i < 20;$i++){
            Project::create([
                'DepartmentID' => $faker->randomElement($departmentsId)
            ]);
        }
    }
}
