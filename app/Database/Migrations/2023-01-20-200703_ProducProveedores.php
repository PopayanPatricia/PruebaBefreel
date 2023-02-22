<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProducProveedores extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idProveedor' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'idProducto' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]
            ]);

            $this->forge->addForeignKey('idProveedor', 'proveedores', 'idProveedor', 'CASCADE', 'SET NULL');
            $this->forge->addForeignKey('idProducto', 'productos', 'idProducto', 'CASCADE', 'SET NULL');
            $this->forge->createTable('producProveedores');
            $this->db->enableForeignKeyChecks();
        }

    public function down()
    {
        $this->forge->dropTable('producProveedores');
    }
}
