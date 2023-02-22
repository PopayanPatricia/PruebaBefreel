<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ganancias extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idGanancia' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'gananciaN1' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN2' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN3' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN4' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN5' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN6' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaN7' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'gananciaTotal' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'idPlanCompen' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]
            ]);
            $this->forge->addKey('idGanancia', true);
            $this->forge->addForeignKey('idPlanCompen', 'planCompensacion', 'idPlanCompen', 'CASCADE', 'SET NULL');
            $this->forge->createTable('ganancias');
            $this->db->enableForeignKeyChecks();
        }

    public function down()
    {
        $this->forge->dropTable('ganancias');
    }
}
