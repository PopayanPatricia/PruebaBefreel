<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class vendedorSeeds extends Seeder
{
    public function run()
    {
        # code...
        $data = [
        'nombre' => 'Maria' ,
        'apellido' => 'Lopez',
        'direccion' => 'Vda La Plata',
        'telefono' => 3131235043,
        'correo'    => 'mariaLopez@gmail.com',
        'contraseña' => '452345@3',
        'idPadre' => 5,
        'idTienda' => 1,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('vendedorIndep')->insert($data);
    }
}