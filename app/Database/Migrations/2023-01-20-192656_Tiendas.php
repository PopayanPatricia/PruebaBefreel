<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tiendas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idTienda' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'NIT' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'direccion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'telefono' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            
        ]);
        $this->forge->addKey('idTienda', true);
        $this->forge->createTable('Tiendas');
    }

    public function down()
    {
        $this->forge->dropTable('Tiendas');
    }
}
