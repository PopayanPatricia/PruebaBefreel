<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class superAdminSeeds extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'Santiago' ,
            'apellido' => 'Arvoleda',
            'direccion' => 'Calle 0 #00 00',
            'telefono' => 3167832435,
            'correo'    => 'robinsonarvoleda@gmail.com',
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('superAdmin')->insert($data);
        
       
    }
}