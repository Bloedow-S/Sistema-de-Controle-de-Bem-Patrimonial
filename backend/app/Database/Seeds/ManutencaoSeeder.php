<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ManutencaoSeeder extends Seeder
{
    public function run()
    {
       $data = [
            [
                'cod_patrimonio_id' => 4, // Projetor Epson PowerLite
                'data_envio'        => '2024-06-10',
                'data_retorno'      => null, // ainda em manutenção
                'motivo'            => 'Falha de imagem, lâmpada possivelmente queimada',
                'custo'             => null,
                'status'            => 'em_andamento',
                'tipo'              => 'corretiva',
            ],
            [
                'cod_patrimonio_id' => 3, // Veículo Fiat Strada
                'data_envio'        => '2023-12-01',
                'data_retorno'      => '2023-12-05',
                'motivo'            => 'Revisão programada de 10.000 km',
                'custo'             => 450.00,
                'status'            => 'concluida',
                'tipo'              => 'preventiva',
            ],
            [
                'cod_patrimonio_id' => 1, // Notebook Dell
                'data_envio'        => '2024-05-20',
                'data_retorno'      => '2024-05-25',
                'motivo'            => 'Troca de bateria',
                'custo'             => 320.00,
                'status'            => 'concluida',
                'tipo'              => 'corretiva',
            ],
        ];

        $this->db->table('manutencao')->insertBatch($data);
    }
}
