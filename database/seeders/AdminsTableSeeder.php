<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id' => 1, 'name' => 'Super Admin', 'type' => 'superadmin', 'vendor_id' => 0, 
            'mobile' => '98000000', 'email' => 'admin@admin.com', 
            'password' => '$2a$12$eAl0Ng6Kl9RcCJ7E0deAReBSOoGoN6glOn1M071AzLa0vxf4d0Zhu', 
            'image' => '', 'status' => 1],
        ];
        Admin::insert($adminRecords);
    }
}
