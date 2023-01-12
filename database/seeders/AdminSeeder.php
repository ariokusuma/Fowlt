<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            "name" => "admin"
        ]);
        $userRole = Role::create([
            "name" => "user"
        ]);

        User::create([
            "name" => "Admin1",
            "uname"=> "Admin1",
            "email" => "admin1@example.com",
            "password" => bcrypt("passwordadmin1"),
            "nohp" => "123",
            "lokasi"=> "dummy",
            "role_id" => $adminRole->id
        ]);

        User::create([
            "name" => "Admin2",
            "uname"=> "Admin2",
            "email" => "admin2@example.com",
            "password" => bcrypt("passwordadmin2"),
            "nohp" => "123",
            "lokasi"=> "dummy",
            "role_id" => $adminRole->id
        ]);

        User::create([
            "name" => "Admin3",
            "uname"=> "Admin3",
            "email" => "admin3@example.com",
            "password" => bcrypt("passwordadmin3"),
            "nohp" => "123",
            "lokasi"=> "dummy",
            "role_id" => $adminRole->id
        ]);
    }
}
