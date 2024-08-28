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
            ["name" => "curso.index"],                
            ["name" => "curso.create"],                
            ["name" => "curso.edit"],                
            ["name" => "curso.show"],                
            ["name" => "curso.destroy"],                 
        ];
        DB::table('resources')->insert($data);
    }
}