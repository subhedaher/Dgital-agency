<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory(1)->create([
            'name' => 'subhe',
            'email' => 'subhedaher@gmail.com',
            'email_verified_at' => null,
            'remember_token' => null
        ]);
    }
}
