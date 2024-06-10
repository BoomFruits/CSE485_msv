<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employee;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departmentsId = Department::pluck('DepartmentID')->toArray();
        $genders = ['Male', 'Female'];
        for($i = 0 ;$i < 50;$i++){
            Employee::create([
                'DepartmentID' => $faker->randomElement($departmentsId),
                'EmployeeName' => $faker->name(),
                'EmployeeAddress' => $faker->address(),
                'DOB' => $faker->date(),
                'Doj' => $faker->date(),
                'Gender' => $faker->randomElement(['Male','Female'])

            ]);
        }
    }
}
