<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuariosModel;
use Firebase\JWT\JWT;

class AuthController extends ResourceController
{
    public function index()
    {
        $usuarioModel = new UsuariosModel();

        $email = $this->request->getPost("email");
        $senha = $this->request->getPost("senha");

        $usuario = $usuarioModel->where('email',$email)->first();
        //Bcrypt: password_verify() extrai o salt da senha armazenada, atribui à recebida e recalcula automaticamente; 
        if ($usuario && password_verify($senha, $usuario->senha)) {
            $payload = [
                'iat' => time(),
                'exp' => time() + 3600,
                'id' => $usuario['id'],
                'papel' => $usuario['papel'],
            ];

            $chave = getenv('JWT_SECRET');
            $token = JWT::encode($payload, $chave, 'HS256'); //algorítmo de assinatura = HS256
        } else {
            return $this->failUnauthorized('Credenciais inválidas');
        }

    }
}
