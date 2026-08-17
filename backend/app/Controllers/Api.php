<?php

namespace App\Controllers;

class Api extends BaseController
{
    public function teste()
    {
        return $this->response->setJSON([
            'status' => 'sucesso',
            'mensagem' => 'API funcionando!'
        ]);
    }
}