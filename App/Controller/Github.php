<?php

namespace App\Controller;

use \Github\Client;

class Github
{

    private $usuarios;

    public function __construct() {
        $this->usuarios = new Client();
    }

    public function lista($campo) {
        $repositories = $this->usuarios->api('user')->find($_POST['pesquisar']);
        $dados = $repositories["users"];
        return $dados;
    }

    public function detalhes($user) {
        $repositories = $this->usuarios->api('user')->repositories($_GET['user']);
        return $repositories;
    }
}