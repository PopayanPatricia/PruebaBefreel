<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class tiendaSeeds extends Seeder
{
    public function run()
    {
        # code...
        $data = [
            'Nit' => 12567,
            'nombre' => 'Tienda Uno',
            'direccion' => 'Calle 10 #00 8',
            'telefono' => 2548437,
            'correo'    => 'TiendaUno@gmail.com',
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('tiendas')->insert($data);
        
    }
}