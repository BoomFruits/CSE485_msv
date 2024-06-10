<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Dependent;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DependentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departmentsId = Employee::pluck('EmployeeID')->toArray();
        $relationship = ['Mom','Dad','Son 1','Son 2','Granmother','Grandfather'];
        for($i = 0 ;$i < 50;$i++){
            Dependent::create([
                'EmployeeID' => $faker->randomElement($departmentsId),
                'DependentName' => $faker->name(),
                'Relationship' => $faker->randomElement($relationship),
                'Gender' => $faker->randomElement(['Male','Female'])
            ]);
        }
    }
}
