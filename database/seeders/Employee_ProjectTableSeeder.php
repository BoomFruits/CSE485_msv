<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\employee_project;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Employee_ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $projectID = Project::pluck('ProjectID')->toArray();
        $employeeID = Employee::pluck('EmployeeID')->toArray();
        for($i = 0 ;$i < 50;$i++){
            employee_project::create([
                'ProjectID' => $faker->randomElement($projectID),
                'EmployeeID' => $faker->randomElement($employeeID),
                'worktime' => $faker->time(),
            ]);
        }
    }
}
