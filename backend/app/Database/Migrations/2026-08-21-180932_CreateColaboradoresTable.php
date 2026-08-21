<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateColaboradoresTable extends Migration
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
                'constraint' => 150,
            ],
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => 80,
            ],
            'cpf' => [
                'type' => 'CHAR',
                'constraint' => 11,
            ],
            'departamento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('departamento_id', 'departamentos', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('colaboradores');
    }

    public function down()
    {
        $this->forge->dropForeignKey('colaboradores', 'colaboradores_departamento_id_foreign');
        $this->forge->dropTable('colaboradores');
    }
}
