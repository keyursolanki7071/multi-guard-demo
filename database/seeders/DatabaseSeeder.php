<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Customer::create([
            "email" =>  "keyur.solanki@arsenaltech.com",
            "password"  =>  Hash::make("Test@1234")
        ]);

        Admin::create([
            "email" =>  "admin@gmail.com",
            "password"  =>  Hash::make("Admin@1234")
        ]);
    }
}
