<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    
    public function run(): void {
        
        $data = [
            [
                // COORDENADOR
                "name" => "niko", 
                "email" => "niko@niko", 
                "password" => Hash::make('nikoniko'), 
                "role_id" => 1,
            ],
            [
                // ALUNO
                "name" => "pedro", 
                "email" => "pedro@pedro.com", 
                "password" => Hash::make('pedro123'), 
                "role_id" => 2,
            ],
        ];
        DB::table('users')->insert($data);
    }
}