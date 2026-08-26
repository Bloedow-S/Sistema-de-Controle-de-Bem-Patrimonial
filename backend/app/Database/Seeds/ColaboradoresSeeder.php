<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ColaboradoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nome' => 'Ana Paula Ferreira',   'cargo' => 'Analista de TI',           'cpf' => '11122233344', 'departamento_id' => 2],
            ['nome' => 'Bruno Costa Lima',     'cargo' => 'Assistente Administrativo', 'cpf' => '22233344455', 'departamento_id' => 1],
            ['nome' => 'Carla Mendes Souza',   'cargo' => 'Analista de RH',           'cpf' => '33344455566', 'departamento_id' => 3],
            ['nome' => 'Diego Almeida Rocha',  'cargo' => 'Contador',                 'cpf' => '44455566677', 'departamento_id' => 4],
            ['nome' => 'Elaine Rodrigues Dias','cargo' => 'Advogada',                 'cpf' => '55566677788', 'departamento_id' => 5],
            ['nome' => 'Fábio Nunes Cardoso',  'cargo' => 'Comprador',                'cpf' => '66677788899', 'departamento_id' => 6],
            ['nome' => 'Gabriela Torres Melo', 'cargo' => 'Técnica em Patrimônio',    'cpf' => '77788899900', 'departamento_id' => 7],
            ['nome' => 'Henrique Barbosa Reis','cargo' => 'Coordenador Administrativo','cpf' => '88899900011', 'departamento_id' => 8],
        ];

        $this->db->table('colaboradores')->insertBatch($data);
    }
}
