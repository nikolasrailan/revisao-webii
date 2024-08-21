<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EixoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "INFORMAÇÃO E COMUNICAÇÃO", "descricao" => "professor de informatica"],
            ["nome" => "RECURSOS NATURAIS","descricao" => "professor de quimica e biologis"],
            ["nome" => "CIÊNCIAS HUMANAS", "descricao" => "professor de sociologia e filosofia"],
            ["nome" => "FÍSICA", "descricao" => "professor de fisica"],
            ["nome" => "MECÂNICA", "descricao" => "professor de desnho grafico"],
            ["nome" => "LINGUAGENS", "descricao" => "professor de portuges"],
        ];
        DB::table('eixos')->insert($data);
    }
}