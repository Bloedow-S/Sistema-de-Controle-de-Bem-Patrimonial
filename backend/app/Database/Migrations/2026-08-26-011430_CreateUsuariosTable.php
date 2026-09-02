<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsuariosTable extends Migration
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
            'cod_funcionario_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'papel' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'operador',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('cod_funcionario_id', 'colaboradores', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropForeignKey('usuarios', 'usuarios_cod_funcionario_id_foreign');
        $this->forge->dropTable('usuarios');
    }
}
