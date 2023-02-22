<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class cajaSeeds extends Seeder
{
    public function run()
    {
        for ($i=1; $i < 4; $i++) { 
            # code...
            $data = [
                'descripcion' => "caja $i tienda Uno",
                'dineroInicioJorn' => 00,
                'dineroFinalJorn' => 158000,
            ];
    
            // Simple Queries
            // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);
    
            // Using Query Builder
            $this->db->table('caja')->insert($data);
        }
    }   
}   