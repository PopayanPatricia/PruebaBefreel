<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class adminSeeds extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'Lucia' ,
            'apellido' => 'Hernadez',
            'direccion' => 'calle 3 #56 15',
            'telefono' => 3208324357,
            'correo'    => 'liciaHernan@gmail.com',
            'contraseña' => 'lucias@#H1234',
            'idSuperAdmin' => 1,
            'idTienda' => 1,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('adminTienda')->insert($data);
        
       
    }
}