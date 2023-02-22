<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ventas extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idVenta' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'fechaventa' => [
                'type'  => 'DATETIME',
                'null' => false,
            ],
            'monto' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'idVendedorIndep' => [
                'type'        => 'INT',
                'constraint'  => 10,
                'unsigned'    => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idVenta', true);
        $this->forge->addForeignKey('idVendedorIndep', 'vendedorIndep', 'idVendedorIndep', 'CASCADE', 'SET NULL');
        $this->forge->createTable('ventas');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('ventas');
    }
}
