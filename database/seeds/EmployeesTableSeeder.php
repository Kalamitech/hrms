<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->insert([
            'photo' => '',
            'code' => 'KT0001',
            'status' => '0',
            'name' => 'Development Admin',
            'gender' => '1',
            'date_of_birth' => '0000-00-00',
            'date_of_joining' => '',
            'number' => '9999999999',
            'emergency_number' => '',
            'tin' => '',
            'father_name' => '',
            'current_address' => '',
            'permanent_address' => '',
            'formalities' => '',
            'offer_acceptance' => '',
            'probation_period' => '',
            'date_of_confirmation' => '',
            'department_id' => '1',
            'role_id' => '1',
            'salary' => '',
            'account_number' => '',
            'bank_name' => '',
            'date_of_resignation' => '',
            'notice_period' => '',
            'last_working_day' => '',
            'full_final' => '',
            'user_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
