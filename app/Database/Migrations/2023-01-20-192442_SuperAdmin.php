<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuperAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idSuperAdmin' => [
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
            /*'contraseña' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],*/
        ]);
        $this->forge->addKey('idSuperAdmin', true);
        $this->forge->createTable('superAdmin');
    }

    public function down()
    {
        $this->forge->dropTable('superAdmin');
    }
}
