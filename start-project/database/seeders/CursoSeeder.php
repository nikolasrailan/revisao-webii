<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CursoSeeder extends Seeder {
    
    public function run(): void {
        
        $data = [
            [
                "nome" => "Analise e desenvolvimento de sistemas", 
                "eixo_id" => 1
            ],
            [
                "nome" => "Ciencia da computação", 
                "eixo_id" => 1
            ],
            [
                "nome" => "Engenharia quimica", 
                "eixo_id" => 2
            ],
            [
                "nome" => "Ciencias sociais", 
                "eixo_id" => 3
            ],
        ];
        DB::table('cursos')->insert($data);
    }
}