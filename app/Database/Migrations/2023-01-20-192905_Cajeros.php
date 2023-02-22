<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cajeros extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idCajero' => [
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
            'horaIngreso' => [
                'type'       => 'DATETIME',
                'null' => false,
            ],
            'horaSalida' => [
                'type'       => 'DATETIME',
                'null' => false,
            ],
            'idCaja' => [
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
        $this->forge->addKey('idCajero', true);
        $this->forge->addForeignKey('idCaja', 'caja', 'idCaja', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('idTienda', 'tiendas', 'idTienda', 'CASCADE', 'SET NULL');
        $this->forge->createTable('cajeros');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('cajeros');
    }
}
