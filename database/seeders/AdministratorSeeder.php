<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator               = new \App\Models\User();
        $administrator->name         = 'amanuba';
        $administrator->email        = 'amanuba@gmail.com';
        $administrator->roles        = 'admin';
        $administrator->password     = bcrypt('amanuba@gmail.com');
        $administrator->save();
        $this->command->info('Data User Berhasil Di Insert !');
    }
}
