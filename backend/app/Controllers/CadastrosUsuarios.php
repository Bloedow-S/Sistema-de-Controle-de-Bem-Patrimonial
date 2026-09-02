<?php  namespace App\Controllers;

use CodeIgniter\BaseController;

class CadastrosUsuarios extends BaseController
{   
    public function index () {
        //$this->load->view("CadastrosUsuariosIndex.html");
    }

    public function inserir() {
        $rs = new stdClass();

        $rs->data->titulo = "Cadastre um usuário";    

        if ($this->request->getMethod == 'POST') {
            $usuarios = new \App\Models\UsuariosModel();

            $usuarios->set([
                'cod_funcionario_id' => $this->request->getPost('cod_funcionario_id'),
                'email' => $this->request->getPost('email'),
                'senha' => $this->request->getPost('senha'),
                'master' => $this->request->getPost('master')
            ]);
        }

        $this->load->view("CadastrosUsuarios.html", $this->data);
    }

    public function editar() {

        $this->load->view("CadastrosUsuarios.html");
    }

}
