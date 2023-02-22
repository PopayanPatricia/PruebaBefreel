<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ventasSeeds extends Seeder
{
    public function run()
    { 
        # code...
        $data = [
            'fechaventa' => '2023-01-08 10:02:00',
            'monto' => 314050,
            'idVendedorIndep' => 4,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('ventas')->insert($data);
        
    }   
} 