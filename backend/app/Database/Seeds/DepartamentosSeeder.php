<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nome' => 'Almoxarifado'],
            ['nome' => 'TI'],
            ['nome' => 'Recursos Humanos'],
            ['nome' => 'Financeiro'],
            ['nome' => 'Jurídico'],
            ['nome' => 'Compras'],
            ['nome' => 'Patrimônio'],
            ['nome' => 'Secretaria de Administração'],
            ['nome' => 'Secretaria de Saúde'],
            ['nome' => 'Secretaria de Educação'],
            ['nome' => 'Protocolo'],
            ['nome' => 'Manutenção Predial'],
        ];

        $this->db->table('departamentos')->insertBatch($data);
    }
}
