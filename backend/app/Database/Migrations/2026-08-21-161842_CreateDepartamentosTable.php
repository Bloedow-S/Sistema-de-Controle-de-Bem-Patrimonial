<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDepartamentosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ], 
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('departamentos');
    }

    public function down()
    {
        $this->forge->dropTable('departamentos');
    }
}
