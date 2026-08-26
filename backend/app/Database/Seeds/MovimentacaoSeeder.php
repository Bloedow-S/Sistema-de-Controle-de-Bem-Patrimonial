<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovimentacaoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'patrimonio_id'    => 1, // Notebook Dell Latitude 5440
                'tipo'             => 'transferencia',
                'local_origem_id'  => 1, // Almoxarifado
                'local_destino_id' => 2, // TI
                'usuario_id'       => 1, // Ana Paula Ferreira
                'motivo'           => 'Entrega de equipamento novo ao setor de TI',
                'data'             => '2024-02-16',
            ],
            [
                'patrimonio_id'    => 2, // Cadeira ergonômica
                'tipo'             => 'transferencia',
                'local_origem_id'  => 1, // Almoxarifado
                'local_destino_id' => 1, // Financeiro (mesmo setor, ficou registrado como recebido lá)
                'usuario_id'       => 2, // Bruno Costa Lima
                'motivo'           => 'Distribuição de mobiliário novo',
                'data'             => '2024-01-11',
            ],
            [
                'patrimonio_id'    => 4, // Projetor Epson
                'tipo'             => 'manutencao',
                'local_origem_id'  => 3, // RH
                'local_destino_id' => 3, // permanece no setor, só muda status
                'usuario_id'       => 3, // Carla Mendes Souza
                'motivo'           => 'Projetor apresentando falha de imagem, enviado para conserto',
                'data'             => '2024-06-10',
            ],
            [
                'patrimonio_id'    => 5, // Monitor LG
                'tipo'             => 'baixa',
                'local_origem_id'  => 4, // Financeiro
                'local_destino_id' => 4, // sem novo destino físico, só muda status
                'usuario_id'       => 4, // Diego Almeida Rocha
                'motivo'           => 'Equipamento com tela quebrada, sem reparo viável',
                'data'             => '2024-07-02',
            ],
            [
                'patrimonio_id'    => 3, // Veículo Fiat Strada
                'tipo'             => 'transferencia',
                'local_origem_id'  => 1, // Almoxarifado
                'local_destino_id' => 6, // Compras
                'usuario_id'       => 6, // Fábio Nunes Cardoso
                'motivo'           => 'Alocação do veículo para uso do setor de Compras',
                'data'             => '2023-06-21',
            ],
        ];

        $this->db->table('movimentacao')->insertBatch($data);
    }
}
