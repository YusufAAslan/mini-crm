<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee; // Ensure the Employee model is imported

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Add some sample employees
        Employee::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);

        Employee::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
        ]);

        Employee::create([
            'name' => 'Michael Johnson',
            'email' => 'michael.johnson@example.com',
        ]);
    }
}
