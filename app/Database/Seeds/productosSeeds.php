<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class productosSeeds extends Seeder
{
    public function run()
    {
        # code...
        $data = [
        'nombre' => 'Paquete de velas blancas San Jorge',
        'descripcion' => 'x 10 Und',
        'valorCompraUnitaria' => 4000,
        'IVA' => 0,
        'valorVentaUnitaria' => 4000,
        'stock' => 35,
        'IdTienda' => 1,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('productos')->insert($data);
    }
}