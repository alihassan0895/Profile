<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function  run()
    {
        //
        $user=User::create([
            'name'=>'super admin',
            'email'=>'super_admin@app.com',
            'password'=>Hash::make('super123'),
        ]);
        $user->attachRole('super_admin');
    }
}
