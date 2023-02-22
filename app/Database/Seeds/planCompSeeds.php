<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class planCompSeeds extends Seeder
{
    public function run()
    {
        # code...
        $data = [
        'compenN1' => 18,
        'compenN2' => 17,
        'compenN3' => 15,
        'compenN4' => 12,
        'compenN5' => 11,
        'compenN6' => 9,
        'compenN7' => 8,
        'idVendedorIndep'=> 2,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('planCompensacion')->insert($data);
    }
}