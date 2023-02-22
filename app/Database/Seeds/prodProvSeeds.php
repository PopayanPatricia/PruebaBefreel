<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class prodProvSeeds extends Seeder
{
    public function run()
    { 
        # code...
        for ($i=1; $i < 45; $i++) { 
            $data = [
                'idProveedor' => 1,
                'idProducto' => $i,
            ];

            // Simple Queries
            // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

            // Using Query Builder
            $this->db->table('producproveedores')->insert($data);
        }
    }   
} 