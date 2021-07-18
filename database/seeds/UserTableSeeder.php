<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'thanh',
            'email' => 'thanh@gmail.com',
            'address' => '237 dang thuy tram',
            'phone' => '0932067939',
            'password' => Hash::make('thanh1234'),
            'role' => 'admin',
            'active' => 1
        ]);

        User::create([
            'name' => 'thanh',
            'email' => 'maicongthanh45261@gmail.com',
            'address' => '237 dang thuy tram',
            'phone' => '0869047367',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'active' => 1
        ]);

        User::create([
            'name' => 'linh',
            'email' => 'linh@gmail.com',
            'address' => '237 dang thuy tram',
            'phone' => '0932067938',
            'password' => Hash::make('linh1234'),
            'role' => 'user',
            'active' => 1
        ]);
    }
}
