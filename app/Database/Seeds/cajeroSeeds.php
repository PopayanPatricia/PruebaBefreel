<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class cajeroSeeds extends Seeder
{
    public function run()
    { 
        $data = [
            'nombre' => 'Sandra' ,
            'apellido' => 'Castañeda',
            'direccion' => "calle 11 #00 7",
            'telefono' => 3138654310,
            'correo'    => "Cajero6@gmail.com",
            'contraseña'    => 'CaJe4@T13nDa',
            'horaIngreso' => '2023-01-01 07:00:00',
            'horaSalida'    => '2023-01-01 08:00:00',
            'IdCaja' => 3,
            'IdTienda' => 1,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('cajeros')->insert($data);
        
       
    }
}