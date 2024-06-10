<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Nette\Utils\Arrays;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $employeeId = Employee::pluck('EmployeeID')->toArray();
        $departmentName = ['Sale','IT','Production','Support','CustomerService','Marketing','Purchasing','Finance','Accounting','HR'];
        for($i = 0 ;$i < 10;$i++){
            Department::create([
                'DepartmentName' => $departmentName[$i],
                'Location' => $faker->address(),
                'manager_id' => $faker->randomElement($employeeId)
                
            ]);
        }
    }
}
