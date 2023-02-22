<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Caja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCaja' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'descripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'dineroInicioJorn' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'dineroFinalJorn' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            
        ]);
        $this->forge->addKey('idCaja', true);
        $this->forge->createTable('caja');
    }

    public function down()
    {
        $this->forge->dropTable('caja');
    }
}
