<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminTienda extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idAdminTienda' => [
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
            'apellido' => [
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
            'contraseña' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'idSuperAdmin' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ],
            'idTienda' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]
            ]);
            $this->forge->addKey('idAdminTienda', true);
            $this->forge->addForeignKey('idSuperAdmin', 'superAdmin', 'idSuperAdmin', 'CASCADE', 'SET NULL');
            $this->forge->addForeignKey('idTienda', 'tiendas', 'idTienda', 'CASCADE', 'SET NULL');
            $this->forge->createTable('adminTienda');
            $this->db->enableForeignKeyChecks();
        }

    public function down()
    {
        $this->forge->dropTable('adminTienda');
    }
      
}
