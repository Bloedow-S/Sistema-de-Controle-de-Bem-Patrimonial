<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'cod_funcionario_id' => 8, // Henrique Barbosa Reis - Coordenador Administrativo
                'email'              => 'henrique.reis@prefeitura.gov.br',
                'senha'              => password_hash('senha123', PASSWORD_DEFAULT),
                'papel'              => 'admin',
            ],
            [
                'cod_funcionario_id' => 7, // Gabriela Torres Melo - Técnica em Patrimônio
                'email'              => 'gabriela.melo@prefeitura.gov.br',
                'senha'              => password_hash('senha123', PASSWORD_DEFAULT),
                'papel'              => 'operador',
            ],
            [
                'cod_funcionario_id' => 1, // Ana Paula Ferreira - Analista de TI
                'email'              => 'ana.ferreira@prefeitura.gov.br',
                'senha'              => password_hash('senha123', PASSWORD_DEFAULT),
                'papel'              => 'consulta',
            ],
        ];

        $this->db->table('usuarios')->insertBatch($data);
    }
}
