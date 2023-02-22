<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PlanCompensacion extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'idPlanCompen' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ],
            'compenN1' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN2' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN3' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN4' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN5' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN6' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'compenN7' => [
                'type'       => 'DECIMAL',
                'constraint' => 6,2,
                'null' => false,
            ],
            'idVendedorIndep' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'null' => true,
            ]
            ]);
            $this->forge->addKey('idPlanCompen', true);
            $this->forge->addForeignKey('idVendedorIndep', 'vendedorIndep', 'idVendedorIndep', 'CASCADE', 'SET NULL');
            $this->forge->createTable('planCompensacion');
            $this->db->enableForeignKeyChecks();
        }

    public function down()
    {
        $this->forge->dropTable('planCompensacion');
    }
}
