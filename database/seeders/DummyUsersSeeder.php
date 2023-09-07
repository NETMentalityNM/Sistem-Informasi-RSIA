<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'name'     =>'Administrasi',
                'email'    =>'administrasi@gmail.com',
                'role'     =>'administrasi',
                'password' =>bcrypt('12345678'),
            ], 
            [
                'name'     =>'Poli Umum',
                'email'    =>'poliumum@gmail.com',
                'role'     =>'poliumum',
                'password' =>bcrypt('12345678'),
            ], 
            [
                'name'     =>'Poli Khusus',
                'email'    =>'polikhusus@gmail.com',
                'role'     =>'polikhusus',
                'password' =>bcrypt('12345678'),
            ], 
            [
                'name'     =>'Klinik',
                'email'    =>'klinik@gmail.com',
                'role'     =>'klinik',
                'password' =>bcrypt('12345678'), 
            ] ,
        ];

        foreach($userdata as $key =>$val){
            User::create($val);
        }
    }
}
