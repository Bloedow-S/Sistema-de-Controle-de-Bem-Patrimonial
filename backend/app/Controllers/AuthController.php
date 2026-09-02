<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuariosModel;
use Firebase\JWT\JWT;

class AuthController extends ResourceController
{
    public function index() //esse método tem que retornar algo: sts legado -> view; projeto -> rota 
    {
        $usuarioModel = new UsuariosModel();

        $email = $this->request->getPost("email");
        $senha = $this->request->getPost("senha");

        $usuario = $usuarioModel->where('email',$email)->first();

        //Bcrypt: password_verify() extrai o salt da senha armazenada, atribui à recebida e recalcula automaticamente para comparar; 
        //payload: é o corpo do token -> a seção central
        if ($usuario && password_verify($senha, $usuario->senha)) {
            $payload = [        
                'iat' => time(),                //hora da criação do token -> time() pega o horário atual em formato Unix Timestamp
                'exp' => time() + 3600,         //Define a hora limite de validade do token
                'id' => $usuario['id'],         
                'papel' => $usuario['papel'],    //id e papel identificam a permissão de cada requisição solicitada, são enviadas ao back.   
            ];

            $chave = getenv('JWT_SECRET');
            $token = JWT::encode($payload, $chave, 'HS256'); //algorítmo de assinatura = HS256

            return $this->respond([     //respond (método do Resource) -> converte o array pra JSON antes de mandar pro cliente
                'mensagem' => 'Login realizado com sucesso.',
                'token' => $token,
            ]);            
        } else {
            return $this->failUnauthorized('Credenciais inválidas');
        }
    }
}
