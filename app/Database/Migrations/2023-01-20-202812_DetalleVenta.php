<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleVenta extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idDetalleVenta' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'cantidad' => [
                'type'       => 'INT',
                'constraint' => 20,
                'null' => false,
            ],
            'valorCantidad' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'descuento' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'valorVenta' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'idProducto' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
           /* 'idVenta' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]*/
        ]);
        $this->forge->addKey('idDetalleVenta', true);
        $this->forge->addForeignKey('idProducto', 'productos', 'idProducto', 'CASCADE', 'SET NULL');
        /*$this->forge->addForeignKey('idVenta', 'ventas', 'idVenta', 'CASCADE', 'SET NULL');*/
        $this->forge->createTable('detalleVenta');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('detalleVenta');
    }
}
