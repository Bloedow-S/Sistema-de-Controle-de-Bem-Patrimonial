<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BemPatrimonialSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'categoria_patrimonio_id' => 1, // Informática
                'descricao'               => 'Notebook Dell Latitude 5440',
                'cod_patrimonio'          => 'PAT-2024-0001',
                'valor_aquisicao'         => 4890.00,
                'data_aquisicao'          => '2024-02-15',
                'responsavel_atual_id'    => 1,
                'local_atual_id'          => 2,
                'status'                  => 'ativo',
            ],
            [
                'categoria_patrimonio_id' => 2, // Mobiliário
                'descricao'               => 'Cadeira de escritório ergonômica',
                'cod_patrimonio'          => 'PAT-2024-0002',
                'valor_aquisicao'         => 780.50,
                'data_aquisicao'          => '2024-01-10',
                'responsavel_atual_id'    => 2,
                'local_atual_id'          => 1,
                'status'                  => 'ativo',
            ],
            [
                'categoria_patrimonio_id' => 3, // Veículos
                'descricao'               => 'Veículo Fiat Strada 2023',
                'cod_patrimonio'          => 'PAT-2023-0087',
                'valor_aquisicao'         => 98500.00,
                'data_aquisicao'          => '2023-06-20',
                'responsavel_atual_id'    => 6,
                'local_atual_id'          => 6,
                'status'                  => 'ativo',
            ],
            [
                'categoria_patrimonio_id' => 5, // Equipamentos Audiovisuais
                'descricao'               => 'Projetor Epson PowerLite',
                'cod_patrimonio'          => 'PAT-2022-0045',
                'valor_aquisicao'         => 3200.00,
                'data_aquisicao'          => '2022-09-05',
                'responsavel_atual_id'    => 3,
                'local_atual_id'          => 3,
                'status'                  => 'em_manutencao',
            ],
            [
                'categoria_patrimonio_id' => 1, // Informática
                'descricao'               => 'Monitor LG 24 polegadas',
                'cod_patrimonio'          => 'PAT-2021-0112',
                'valor_aquisicao'         => 890.00,
                'data_aquisicao'          => '2021-11-30',
                'responsavel_atual_id'    => 4,
                'local_atual_id'          => 4,
                'status'                  => 'baixado',
            ],
        ];

        $this->db->table('bem_patrimonial')->insertBatch($data);
    }
}
