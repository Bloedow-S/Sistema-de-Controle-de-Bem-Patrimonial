<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriaBemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nome' => 'Informática',           'vida_util_anos' => 5,  'taxa_depreciacao' => 20.00],
            ['nome' => 'Mobiliário',             'vida_util_anos' => 10, 'taxa_depreciacao' => 10.00],
            ['nome' => 'Veículos',               'vida_util_anos' => 5,  'taxa_depreciacao' => 20.00],
            ['nome' => 'Equipamentos de Copa',   'vida_util_anos' => 8,  'taxa_depreciacao' => 12.50],
            ['nome' => 'Equipamentos Audiovisuais','vida_util_anos' => 5, 'taxa_depreciacao' => 20.00],
            ['nome' => 'Máquinas e Ferramentas', 'vida_util_anos' => 10, 'taxa_depreciacao' => 10.00],
            ['nome' => 'Equipamentos de Segurança','vida_util_anos' => 7, 'taxa_depreciacao' => 14.30],
            ['nome' => 'Instalações e Benfeitorias','vida_util_anos' => 25, 'taxa_depreciacao' => 4.00],
        ];

        $this->db->table('categoria_bem')->insertBatch($data);
    }
}
