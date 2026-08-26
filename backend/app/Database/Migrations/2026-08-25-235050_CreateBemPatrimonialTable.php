<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBemPatrimonialTable extends Migration
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

            'categoria_patrimonio_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'descricao' => [
                'type' =>'VARCHAR',
                'constraint'=>255,
            ],

            'cod_patrimonio' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],

            'valor_aquisicao' => [
                'type' => 'DECIMAL',
                'constraint' => '12,2'
            ],

            'data_aquisicao' => [
                'type' => 'DATE',
            ],

            'responsavel_atual_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'local_atual_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('categoria_patrimonio_id', 'categoria_bem', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('responsavel_atual_id', 'colaboradores', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->addForeignKey('local_atual_id', 'departamentos', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('bem_patrimonial');
    }

    public function down()
    {
       $this->forge->dropForeignKey('bem_patrimonial', 'bem_patrimonial_categoria_patrimonio_id_foreign');
       $this->forge->dropForeignKey('bem_patrimonial', 'bem_patrimonial_responsavel_atual_id_foreign');
       $this->forge->dropForeignKey('bem_patrimonial', 'bem_patrimonial_local_atual_id_foreign');
       $this->forge->dropTable('bem_patrimonial');
    }
}
