<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idProducto' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'descripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'valorCompraUnitaria' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'IVA' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'valorVentaUnitaria' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'stock' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'idTienda' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]
        ]);
        $this->forge->addKey('idProducto', true);
        $this->forge->addForeignKey('idTienda', 'tiendas', 'idTienda', 'CASCADE', 'SET NULL');
        $this->forge->createTable('productos');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
