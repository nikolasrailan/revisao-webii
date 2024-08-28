<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DisciplinaSeeder extends Seeder {
    
    public function run(): void {
        
        $data = [
            [
                "nome" => "Engenharia de software", 
                "curso_id" => 1
            ],
            [
                "nome" => "Orientação a objetos", 
                "curso_id" => 1
            ],
            [
                "nome" => "Quimica", 
                "curso_id" => 3
            ],
        ];
        DB::table('disciplinas')->insert($data);
    }
}