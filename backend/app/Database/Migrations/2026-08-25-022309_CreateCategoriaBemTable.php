<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriaBemTable extends Migration
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
                'constraint' => 80,
            ],

            'vida_util_anos' => [
                'type'=> 'INT',
                'unsigned' => true,
                'constraint' => 3,
            ],

            'taxa_depreciacao' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('categoria_bem');
    }

    public function down()
    {
        $this->forge->dropTable('categoria_bem');
    }
}
