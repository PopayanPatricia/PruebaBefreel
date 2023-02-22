<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class proveedorSeeds extends Seeder
{
    public function run()
    {
        //for ($i=1; $i < 11; $i++) { 
            # code...
            $data = [
                'nombre' => 'Proveedor exito del ahorro',
                'apellido' => 'de BeFree',
                'direccion' => 'Calle 4 #00 12',
                'telefono' => 3134586723,
                'correo'    => "proveedores@gmail.com",
            ];

            $data = [
                'nombre' => 'Proveedor el diamante',
                'apellido' => 'de BeFree',
                'direccion' => 'Calle 4 #00 12',
                'telefono' => 3134586723,
                'correo'    => "proveedores@gmail.com",
            ];
    
            // Simple Queries
           // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);
    
            // Using Query Builder
            $this->db->table('proveedores')->insert($data);
       // }
       
    }
}