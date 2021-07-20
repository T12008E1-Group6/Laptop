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
            'name' => 'Quang Thanh',
            'email' => 'thanh@gmail.com',
            'address' => '237 dang thuy tram',
            'phone' => '0932067939',
            'password' => Hash::make('thanh1234'),
            'role' => 'admin',
            'active' => 1
        ]);

        User::create([
            'name' => 'Cong Thanh',
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

        User::create([
            'name' => 'TestUser01',
            'email' => 'TestUser01@gmail.com',
            'address' => 'TestUser01',
            'phone' => 'TestUser01',
            'password' => Hash::make('user1234'),
            'role' => 'user',
            'active' => 1
        ]);
    }
}
