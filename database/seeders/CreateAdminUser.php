<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'firstname' => 'admin',
                'lastname' => 'admin',
                'phone' => '111111',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678'),
                'status' => '1'
            ]
        );
    }
}
