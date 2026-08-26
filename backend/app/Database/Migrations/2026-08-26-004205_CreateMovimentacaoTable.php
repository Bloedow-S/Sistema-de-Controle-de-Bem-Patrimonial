<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMovimentacaoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'autoincrement' => true, 
            ],

            'patrimonio_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'tipo' => [
                'type' =>'VARCHAR',
                'constraint'=>20,
            ],

            'local_origem_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'local_destino_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'usuario_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'motivo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'data' => [
                'type' => 'DATE'
            ],

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('patrimonio_id', 'bem_patrimonial', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('local_origem_id', 'departamentos', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('local_destino_id', 'departamentos', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('usuario_id', 'colaboradores', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('movimentacao');
    }

    public function down()
    {
       $this->forge->dropForeignKey('movimentacao', 'movimentacao_patrimonio_id_foreign');
       $this->forge->dropForeignKey('movimentacao', 'movimentacao_local_origem_id_foreign');
       $this->forge->dropForeignKey('movimentacao', 'movimentacao_local_destino_id_foreign');
       $this->forge->dropForeignKey('movimentacao', 'movimentacao_usuario_id_foreign');
       $this->forge->dropTable('movimentacao');
    }
}
