<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class detalleVentaSeeds extends Seeder
{
    public function run()
    {
        # code...
        $data = [
        'cantidad' => 1,
        'valorCantidad' => 9.289,
        'descuento' => 0,
        'valorVenta' => 27.350,
        'idProducto' => 19,
        'idVenta' => 6,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('detalleventa')->insert($data);
    }
}