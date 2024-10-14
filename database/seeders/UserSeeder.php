<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Customer Service',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),  // Gunakan bcrypt untuk menghash password
            'role' => 'customer_service',       // Tambahkan role
        ]);

        User::create([
            'name' => 'Supervisi',
            'email' => 'supervisor@example.com',
            'password' => bcrypt('password'),  // Gunakan bcrypt untuk menghash password
            'role' => 'supervisi',              // Tambahkan role
        ]);
    }
}
