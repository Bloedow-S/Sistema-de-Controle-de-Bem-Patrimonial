<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateManutencaoTable extends Migration
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
            'cod_patrimonio_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'data_envio' => [
                'type' => 'DATE',
            ],
            'data_retorno' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'motivo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'custo' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('cod_patrimonio_id', 'bem_patrimonial', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('manutencao');
    }

    public function down()
    {
        $this->forge->dropForeignKey('manutencao', 'manutencao_cod_patrimonio_id_foreign');
        $this->forge->dropTable('manutencao');
    }
}
