<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run(): void {
        
        $data = [
            // coordenador
            ["role_id" => 1, "resource_id" => 1, "permission" => 1],
            ["role_id" => 1, "resource_id" => 2, "permission" => 1],
            ["role_id" => 1, "resource_id" => 3, "permission" => 1],
            ["role_id" => 1, "resource_id" => 4, "permission" => 1],
            ["role_id" => 1, "resource_id" => 5, "permission" => 1],
            ["role_id" => 1, "resource_id" => 6, "permission" => 1],
            ["role_id" => 1, "resource_id" => 7, "permission" => 1],
            ["role_id" => 1, "resource_id" => 8, "permission" => 1],
            ["role_id" => 1, "resource_id" => 9, "permission" => 1],
            ["role_id" => 1, "resource_id" => 10, "permission" => 1],
            
            //aluno
            ["role_id" => 2, "resource_id" => 1, "permission" => 1],
            ["role_id" => 2, "resource_id" => 2, "permission" => 0],
            ["role_id" => 2, "resource_id" => 3, "permission" => 0],
            ["role_id" => 2, "resource_id" => 4, "permission" => 1],
            ["role_id" => 2, "resource_id" => 5, "permission" => 0],
            ["role_id" => 2, "resource_id" => 6, "permission" => 1],
            ["role_id" => 2, "resource_id" => 7, "permission" => 0],
            ["role_id" => 2, "resource_id" => 8, "permission" => 0],
            ["role_id" => 2, "resource_id" => 9, "permission" => 1],
            ["role_id" => 2, "resource_id" => 10, "permission" => 0],

        ];
        DB::table('permissions')->insert($data);
    }
}