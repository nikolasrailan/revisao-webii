<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    public function run(): void {
        
        $data = [
            ["name" => "eixo.index"],                      
            ["name" => "eixo.create"],                      
            ["name" => "eixo.edit"],                      
            ["name" => "eixo.show"],                      
            ["name" => "eixo.destroy"],   
            //----------             
            ["name" => "disciplina.index"],                
            ["name" => "disciplina.create"],                
            ["name" => "disciplina.edit"],                
            ["name" => "disciplina.show"],                
            ["name" => "disciplina.destroy"],                 
        ];
        DB::table('resources')->insert($data);
    }
}