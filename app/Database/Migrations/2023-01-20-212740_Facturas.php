<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Facturas extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idFactura' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'numeroFactura' => [
                'type'       => 'INT',
                'constraint' => 50,
                'null' => false,
            ],
            'fecha' => [
                'type'  => 'DATETIME',
                'null' => false,
            ],
            'idCajero' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'idDetalleVenta' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'idVendedorIndep' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('idFactura', true);
        $this->forge->addForeignKey('idCajero', 'cajeros', 'idCajero', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idDetalleVenta', 'detalleVenta', 'idDetalleVenta', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idVendedorIndep', 'vendedorIndep', 'idVendedorIndep', 'CASCADE', 'SET NULL');
        $this->forge->createTable('facturas');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('facturas');
    }
}
